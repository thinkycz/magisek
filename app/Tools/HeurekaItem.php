<?php

namespace App\Tools;

use App\Models\Product;
use InvalidArgumentException;

class HeurekaItem extends BaseItem implements ItemInterface
{
    protected $required = [
		'ITEM_ID',
		'PRODUCTNAME',
		'DESCRIPTION',
		'URL',
        'PRICE_VAT',
        'DELIVERY_DATE'
	];

    public static function fromProduct(Product $product)
    {
        return tap(new self(), function (HeurekaItem $item) use ($product) {
            $item->setId($product->id);
            $item->setName($product->name);
            $item->setUrl(route('products.show', $product));
            $item->setDescription($product->description);
            $item->setEan($product->barcode);
            $item->setProductNo($product->catalog);
            $item->setDeliveryDate(0);
            $item->setImage(url($product->thumbnail));
            $item->setPrice($product->price);

            foreach ($product->properties as $property) {
                $item->addParam($property->propertyType->getTranslation('name', $language), $property->getTranslation('value', $language));
            }
        });
    }

	public function setId($id)
	{
		if (preg_match('/[^a-z_\-0-9]/i', $id)) {
			throw new InvalidArgumentException("ID " . $id . " must be alphanumeric.");
		}

		$this->row['ITEM_ID'] = $id;
	}

	public function setName($name)
	{
		$this->row['PRODUCTNAME'] = $name;
	}

	public function getName()
	{
		return $this->row['PRODUCTNAME'];
	}

	public function setUrl($url)
	{
		if(filter_var($url, FILTER_VALIDATE_URL) === false) {
			throw new InvalidArgumentException('Is not valid URL: ' . $url);
		}

		$this->row['URL'] = $url;
	}

	public function getUrl()
	{
		return $this->row['URL'];
	}

	public function setDescription($desc)
	{
		$this->row['DESCRIPTION'] = strip_tags($desc);
	}

	public function setPrice($price)
	{
		$this->row['PRICE_VAT'] = round($price, 2);
	}

	public function setDeliveryDate($delivery)
	{
		$this->row['DELIVERY_DATE'] = $delivery;
	}

	// Recommended

	public function setCategoryText($category)
	{
		$this->row['CATEGORYTEXT'] = $category;
	}

	public function setImage($image)
	{
		$this->row['IMGURL'] = $image;
	}

	public function addImageAlternate($image)
	{
		$this->row['IMGURL_ALTERNATE'][] = $image;
	}

	public function setEan($ean)
	{
		$this->row['EAN'] = $ean;
	}

	public function setProductNo($no)
	{
		$this->row['PRODUCTNO'] = $no;
	}

	public function setItemgroupId($group)
	{
		$this->row['ITEMGROUP_ID'] = $group;
	}

	public function setManufacturer($man)
	{
		$this->row['MANUFACTURER'] = $man;
	}

	public function setProduct($product)
	{
		$this->row['PRODUCT'] = $product;
	}

	public function setMaxCPC($cpc = NULL)
	{
		if ($cpc) {
			if ($cpc < 1 || $cpc > 1000) {
				throw new InvalidArgumentException('MAX CPC must be between 1 AND 1000 Kč');
			} elseif (!is_numeric($cpc)) {
				throw new InvalidArgumentException('MAX CPC must be numeric');
			}
			$this->row['HEUREKA_CPC'] = $cpc;
		}
	}

	public function addParam($name, $value, $unit = NULL)
	{
		 $param = [
			"PARAM_NAME" => $name,
			"VAL" => $value,
		];

		 if ($unit) {
		     $param["UNIT"] = $unit;
         }

        $this->row["PARAM"][] = $param;
	}

	public function unsetParam()
	{
		unset($this->row['PARAM']);
	}

    /**
     * https://sluzby.heureka.cz/napoveda/xml-feed/#DELIVERY
     *
     * @param $name
     * @param null $price
     * @param null $price_cod
     */
	public function addDelivery($name, $price = NULL, $price_cod = NULL)
	{
		$arr['DELIVERY_ID'] = $name;

		if (!is_null($price)) {
			$arr['DELIVERY_PRICE'] = $price;
		}

		if (!is_null($price_cod)) {
			$arr['DELIVERY_PRICE_COD'] = $price_cod;
		}

		$this->row['DELIVERY'][] = $arr;
	}

	public function setVideo($video)
	{
		if(stripos($video, 'youtube.com') !== false) {
			$this->row['VIDEO_URL'] = $video;
		}
	}
}
