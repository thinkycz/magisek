<?php

namespace App\Jobs;

use App\Imports\ProductListCsvImport;
use App\Models\Product;
use Closure;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Storage;

class SyncCsvFromGoogleSheets implements ShouldQueue
{
    /**
     * @var string
     */
    public static $jobName = 'Google Sheets Sync';

    /**
     * @var string
     */
    public static $statusCode = 'google_spreadsheets_status';

    /**
     * Max 60 minutes
     *
     * @var int
     */
    public $timeout = 3600;

    /**
     * Max 1 try
     *
     * @var int
     */
    public $tries = 1;

    /**
     * @var Collection
     */
    protected $data;

    /**
     * @var object
     */
    protected $settings;

    /**
     * @var string
     */
    protected $endpoint;

    protected $properties = [
        'name',
        'description',
        'details',
        'catalogue_number',
        'barcode',
        'minimum_order_quantity',
        'vatrate',
        'base_units_in_product_unit',
        'photo'
    ];

    /**
     * @var array
     */
    protected $numeric = [
        'minimum_order_quantity',
        'vatrate',
        'base_units_in_product_unit'
    ];

    protected function prepare()
    {
        parent::prepare();

        $this->settings = $this->store->loadDataObject('google_spreadsheets');
        $this->endpoint = $this->buildEndpoint($this->settings->google_sheets_link);
    }

    public function handle()
    {
        $this->prepare();

        (new ProductListCsvImport(Closure::fromCallable([$this, 'handleProduct'])))->import($this->getFile());

        $this->logJobSucceeded();
    }

    public function failed(\Exception $exception)
    {
        $this->logJobFailed($exception);
    }

    protected function handleProduct(Collection $data)
    {
        $this->data = $data;

        if (!$this->getFromData($this->settings->product_identifier)) {
            return null;
        }

        /** @var Product $product */
        $product = $this->store->products()->updateOrCreate(
            [$this->settings->product_identifier => $this->getFromData($this->settings->product_identifier)],
            $this->getFromData($this->properties)
        );

        $this->handleProductCategories($product)
            ->handleProductStock($product)
            ->handleProductPrices($product)
            ->handleProductProperties($product)
            ->handleProductOptions($product)
            ->handleProductUnit($product)
            ->handleQuantityDiscounts($product)
            ->handleProductPhoto($product);

        return $product->save();
    }

    protected function getFile()
    {
        $path = "google_sheets/{$this->store->id}";
        $file = file_get_contents($this->endpoint);
        $name = 'endpoint.csv';

        Storage::disk('local')->createDir($path);
        Storage::disk('local')->put("{$path}/{$name}", $file);

        return "{$path}/{$name}";
    }

    protected function buildEndpoint($link)
    {
        preg_match('/\/d\/e\/(.*?)(\/|$)/', $link, $matches);

        $sheetId = isset($matches[1]) ? $matches[1] : $link;

        return $sheetId ? "https://docs.google.com/spreadsheets/d/e/{$sheetId}/pub?output=csv" : null;
    }

    protected function handleProductCategories(Product $product)
    {
        if ($categories = $this->getFromData('categories')) {
            $categoriesToSync = collect(explode('|', $categories))
                ->map(function ($name) {
                    return trim($name);
                })
                ->filter(function ($name) {
                    return !empty($name);
                })
                ->map(function ($name) {
                    return $this->store->categories()->firstOrCreate(compact('name'))->id;
                })
                ->unique();

            $product->categories()->sync($categoriesToSync);
        }

        return $this;
    }

    protected function handleProductStock(Product $product)
    {
        if ($quantity = $this->getFromData('quantity_in_stock')) {
            $availability = $quantity > 0 ?
                preferenceRepository()->getDefaultInStockAvailability() :
                preferenceRepository()->getDefaultOutOfStockAvailability();

            $product->update([
                'quantity_in_stock' => $quantity,
                'availability_id'   => $availability->id
            ]);
        }

        return $this;
    }

    protected function handleProductPrices(Product $product)
    {
        $prices = $this->getMatchingData('price');
        $oldPrices = $this->getMatchingData('old_price');

        $this->store->priceLevels->each(function (PriceLevel $priceLevel) use ($prices, $oldPrices, $product) {
            $product->setPrice($priceLevel->id, $prices->get($priceLevel->import_code), $oldPrices->get($priceLevel->import_code));
        });

        return $this;
    }

    protected function handleProductProperties(Product $product)
    {
        $properties = $this->getMatchingData('property');

        $properties->each(function ($value, $key) use ($product) {
            if ($propertyType = PropertyType::where('code', $key)->first()) {
                $product->addProperty($value, $propertyType->id);
            }
        });

        return $this;
    }

    protected function handleProductOptions(Product $product)
    {
        $options = $this->getMatchingData('option');

        $options->each(function ($values, $key) use ($product) {
            if ($propertyType = PropertyType::where('code', $key)->first()) {
                collect(explode('|', $values))
                    ->map(function ($value) {
                        return trim($value);
                    })
                    ->filter(function ($value) {
                        return !empty($value);
                    })
                    ->each(function ($value) use ($product, $propertyType) {
                        $product->addProperty($value, $propertyType->id, true);
                    });
            }
        });

        return $this;
    }

    protected function handleProductUnit(Product $product)
    {
        if ($unit = $this->getFromData('unit')) {
            $unit = Unit::whereLike('name_v', $unit)->first() ?: preferenceRepository()->getDefaultQuantitativeUnit();
            $product->unit()->associate($unit);
        }

        return $this;
    }

    protected function handleQuantityDiscounts(Product $product)
    {
        $discounts = $this->getMatchingData('quantity_discount');

        $discounts->each(function ($values) use ($product) {
            $values = collect(explode('|', $values));
            $quantity = $values[0] ?? null;
            $price = $values[1] ?? null;

            $product->setQuantityDiscount(normalizeNumber($quantity), normalizeNumber($price));
        });

        return $this;
    }

    protected function handleProductPhoto(Product $product)
    {
        if (($photo = $this->getFromData('photo')) && !$product->hasMedia('photos')) {
            try {
                $product
                    ->addMediaFromUrl($photo, 'image/jpeg', 'image/png', 'image/gif')
                    ->toMediaCollection('photos')
                    ->save();
            } catch (\Exception $e) {

            }
        }

        return $this;
    }

    /**
     * @param $properties
     * @return array|mixed
     */
    protected function getFromData(array $properties)
    {
        $result = collect($properties)
            ->mapWithKeys(function ($property) {
                return [$property => $this->getMatchingData()->get($property)];
            })
            ->filter(function ($value) {
                return !empty($value);
            });

        return $result->count() > 1 ? $result->toArray() : $result->first();
    }

    /**
     * @param string $pattern
     * @return Collection
     */
    protected function getMatchingData(string $pattern = '')
    {
        return $this->data
            ->mapWithKeys(function ($value, $key) {
                return [trim($key) => trim($value)];
            })
            ->filter(function ($value, $key) use ($pattern) {
                return starts_with($key, $pattern) || empty($pattern);
            })
            ->mapWithKeys(function ($value, $key) use ($pattern) {
                return [ltrim(str_after($key, $pattern), '.') => trim($value)];
            });
    }
}
