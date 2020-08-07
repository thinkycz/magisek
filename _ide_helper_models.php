<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\PaymentMethod
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array $name
 * @property float $price
 * @property float|null $mov
 * @property int $price_will_be_calculated
 * @property int $enabled
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DeliveryMethod[] $deliveryMethods
 * @property-read int|null $delivery_methods_count
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod whereMov($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod wherePriceWillBeCalculated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod whereUpdatedAt($value)
 */
	class PaymentMethod extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderedItem
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $type
 * @property float $price
 * @property float $vatrate
 * @property int $quantity
 * @property string|null $barcode
 * @property string|null $catalog
 * @property mixed|null $options
 * @property int $order_id
 * @property int|null $product_id
 * @property-read mixed $formatted_price
 * @property-read mixed $formatted_price_excl_vat
 * @property-read mixed $formatted_total_price
 * @property-read mixed $formatted_total_price_excl_vat
 * @property-read mixed $price_excl_vat
 * @property-read mixed $total_price
 * @property-read mixed $total_price_excl_vat
 * @property-read \App\Models\Order $order
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem whereCatalog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OrderedItem whereVatrate($value)
 */
	class OrderedItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $slug
 * @property int $position
 * @property int $enabled
 * @property int $_lft
 * @property int $_rgt
 * @property int|null $parent_id
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\Category[] $children
 * @property-read int|null $children_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\Category|null $parent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Kalnoy\Nestedset\Collection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category d()
 * @method static \Kalnoy\Nestedset\Collection|static[] get($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Models\Category newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Models\Category newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Models\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereLike($column, $keyword)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereLikeQuery($column, $keyword)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\PropertyType
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array $name
 * @property int $is_hidden
 * @property int $is_sortable
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Property[] $properties
 * @property-read int|null $properties_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyType whereIsHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyType whereIsSortable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyType whereUpdatedAt($value)
 */
	class PropertyType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property string|null $details
 * @property string|null $catalog
 * @property string|null $barcode
 * @property int $quantity_in_stock
 * @property int $moq
 * @property float $vatrate
 * @property int $enabled
 * @property int $multiply_of_moq_only
 * @property int|null $availability_id
 * @property int|null $unit_id
 * @property int $_lft
 * @property int $_rgt
 * @property int|null $parent_id
 * @property-read \App\Models\Availability|null $availability
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read mixed $formatted_price
 * @property-read mixed $formatted_price_excl_vat
 * @property-read mixed $formatted_vatrate
 * @property-read mixed $photos
 * @property-read mixed $price
 * @property-read mixed $price_excl_vat
 * @property-read mixed $public_stock_quantity
 * @property-read mixed $purchasable
 * @property-read mixed $thumbnail
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OrderedItem[] $orderedItems
 * @property-read int|null $ordered_items_count
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Price[] $prices
 * @property-read int|null $prices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Property[] $properties
 * @property-read int|null $properties_count
 * @property-write mixed $minimum_order_quantity
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read \App\Models\Unit|null $unit
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereAvailabilityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereCatalog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereMoq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereMultiplyOfMoqOnly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereQuantityInStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Product whereVatrate($value)
 */
	class Product extends \Eloquent implements \Gloudemans\Shoppingcart\Contracts\Buyable, \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $order_number
 * @property string $invoice_number
 * @property string $variable_symbol
 * @property \Illuminate\Support\Carbon $tax_date
 * @property \Illuminate\Support\Carbon $due_date
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $notes
 * @property string|null $customer_note
 * @property int|null $user_id
 * @property int|null $status_id
 * @property int|null $shipping_detail_id
 * @property int|null $billing_detail_id
 * @property int|null $delivery_method_id
 * @property int|null $payment_method_id
 * @property-read \App\Models\BillingDetail|null $billingDetail
 * @property-read \App\Models\DeliveryMethod|null $deliveryMethod
 * @property-read mixed $customer_name
 * @property-read mixed $formatted_total_value
 * @property-read mixed $formatted_total_value_excl_vat
 * @property-read mixed $total_value
 * @property-read mixed $total_value_excl_vat
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OrderedItem[] $orderedItems
 * @property-read int|null $ordered_items_count
 * @property-read \App\Models\PaymentMethod|null $paymentMethod
 * @property-read \App\Models\ShippingDetail|null $shippingDetail
 * @property-read \App\Models\Status|null $status
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereBillingDetailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereCustomerNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereDeliveryMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereShippingDetailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereTaxDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Order whereVariableSymbol($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Preference
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $code
 * @property int|null $preferable_id
 * @property string $preferable_type
 * @property-read mixed $name
 * @property mixed $value
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $preferable
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Preference newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Preference newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Preference query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Preference whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Preference whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Preference whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Preference wherePreferableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Preference wherePreferableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Preference whereUpdatedAt($value)
 */
	class Preference extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Availability
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $code
 * @property array $name
 * @property array|null $description
 * @property int $allow_orders
 * @property int $allow_negative_quantity
 * @property int $products_visible
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability whereAllowNegativeQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability whereAllowOrders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability whereProductsVisible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability whereUpdatedAt($value)
 */
	class Availability extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Country
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array $name
 * @property string $isocode2
 * @property string $isocode3
 * @property int $enabled
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BillingDetail[] $billingDetails
 * @property-read int|null $billing_details_count
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ShippingDetail[] $shippingDetails
 * @property-read int|null $shipping_details_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereIsocode2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereIsocode3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $value
 * @property string|null $color
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag whereLike($column, $keyword)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag whereLikeQuery($column, $keyword)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag whereValue($value)
 */
	class Tag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string $email
 * @property string|null $phone
 * @property string|null $locale
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $notes
 * @property int $is_admin
 * @property int $receive_newsletter
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $price_level_id
 * @property int|null $currency_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BillingDetail[] $billingDetails
 * @property-read int|null $billing_details_count
 * @property-read mixed $avatar
 * @property-read mixed $name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ShippingDetail[] $shippingDetails
 * @property-read int|null $shipping_details_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePriceLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereReceiveNewsletter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

namespace App\Models{
/**
 * App\Models\Unit
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $code
 * @property array $name
 * @property array $abbr
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereAbbr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereLike($column, $keyword)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereLikeQuery($column, $keyword)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit whereUpdatedAt($value)
 */
	class Unit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Price
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property float $price
 * @property float|null $old_price
 * @property int $product_id
 * @property int $price_level_id
 * @property-read \App\Models\PriceLevel $priceLevel
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereOldPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price wherePriceLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Price whereUpdatedAt($value)
 */
	class Price extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Property
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $product_id
 * @property int $property_type_id
 * @property int $property_value_id
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\PropertyType $propertyType
 * @property-read \App\Models\PropertyValue $propertyValue
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property wherePropertyTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property wherePropertyValueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereUpdatedAt($value)
 */
	class Property extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Status
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $code
 * @property array $name
 * @property array|null $description
 * @property string $color
 * @property int $is_final
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereIsFinal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereUpdatedAt($value)
 */
	class Status extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BillingDetail
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $company_name
 * @property string $first_name
 * @property string $last_name
 * @property string $city
 * @property string $street
 * @property string $zipcode
 * @property string|null $phone
 * @property string|null $vat_id
 * @property string|null $company_id
 * @property int|null $country_id
 * @property int|null $user_id
 * @property-read \App\Models\Country|null $country
 * @property-read mixed $full_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail whereVatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BillingDetail whereZipcode($value)
 */
	class BillingDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Currency
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array $name
 * @property string $isocode
 * @property string|null $symbol
 * @property float $exchange_rate
 * @property int $symbol_is_before
 * @property int $enabled
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency whereIsocode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency whereSymbolIsBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency whereUpdatedAt($value)
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PropertyValue
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $value
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Property[] $properties
 * @property-read int|null $properties_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyValue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyValue whereValue($value)
 */
	class PropertyValue extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeliveryMethod
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array $name
 * @property float $price
 * @property float|null $mov
 * @property int $needs_shipping_address
 * @property int $price_will_be_calculated
 * @property int $enabled
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PaymentMethod[] $paymentMethods
 * @property-read int|null $payment_methods_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod whereMov($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod whereNeedsShippingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod wherePriceWillBeCalculated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod whereUpdatedAt($value)
 */
	class DeliveryMethod extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ShippingDetail
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $company_name
 * @property string $first_name
 * @property string $last_name
 * @property string $city
 * @property string $street
 * @property string $zipcode
 * @property string|null $phone
 * @property int|null $country_id
 * @property int|null $user_id
 * @property-read \App\Models\Country|null $country
 * @property-read mixed $full_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ShippingDetail whereZipcode($value)
 */
	class ShippingDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PriceLevel
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property int $enabled
 * @property int $has_quantity_discounts
 * @property-read mixed $import_code
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Price[] $prices
 * @property-read int|null $prices_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PriceLevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PriceLevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PriceLevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PriceLevel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PriceLevel whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PriceLevel whereHasQuantityDiscounts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PriceLevel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PriceLevel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PriceLevel whereUpdatedAt($value)
 */
	class PriceLevel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Page
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property int $hide_from_blog
 * @property-read mixed $excerpt
 * @property mixed $image
 * @property-read mixed $thumbnail
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereHideFromBlog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereUpdatedAt($value)
 */
	class Page extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $namespace
 * @property string $code
 * @property array $schema
 * @property array $data
 * @property-read mixed $name
 * @property-read mixed $value
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereNamespace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereSchema($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Setting whereUpdatedAt($value)
 */
	class Setting extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

