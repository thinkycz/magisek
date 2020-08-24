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
 * @method static \Illuminate\Database\Eloquent\Builder|Availability newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Availability newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Availability query()
 * @method static \Illuminate\Database\Eloquent\Builder|Availability whereAllowNegativeQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Availability whereAllowOrders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Availability whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Availability whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Availability whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Availability whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Availability whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Availability whereProductsVisible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Availability whereUpdatedAt($value)
 */
	class Availability extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Banner
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property int $enabled
 * @property mixed $image
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUpdatedAt($value)
 */
	class Banner extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail whereVatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillingDetail whereZipcode($value)
 */
	class BillingDetail extends \Eloquent {}
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
 * @property int $is_featured
 * @property int $show_in_menu
 * @property-read \Kalnoy\Nestedset\Collection|Category[] $children
 * @property-read int|null $children_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read Category|null $parent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Kalnoy\Nestedset\Collection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Category d()
 * @method static \Kalnoy\Nestedset\Collection|static[] get($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereLike($column, $keyword)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereLikeQuery($column, $keyword)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereShowInMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereIsocode2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereIsocode3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Coupon
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $code
 * @property string $description
 * @property string $value
 * @property int $times_used
 * @property int $max_usage
 * @property \Illuminate\Support\Carbon|null $valid_from
 * @property \Illuminate\Support\Carbon|null $valid_to
 * @property int $enabled
 * @property int $once_per_user
 * @property int $can_be_combined
 * @property int $is_percentage
 * @property-read mixed $discount
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCanBeCombined($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereIsPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereMaxUsage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereOncePerUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereTimesUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereValidFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereValidTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereValue($value)
 */
	class Coupon extends \Eloquent implements \Gloudemans\Shoppingcart\Contracts\Buyable {}
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
 * @property string $exchange_rate
 * @property int $symbol_is_before
 * @property int $enabled
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereExchangeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereIsocode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSymbolIsBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeliveryMethod
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array $name
 * @property string $price
 * @property string|null $mov
 * @property int $needs_shipping_address
 * @property int $price_will_be_calculated
 * @property int $enabled
 * @property-read mixed $formatted_price
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PaymentMethod[] $paymentMethods
 * @property-read int|null $payment_methods_count
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod whereMov($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod whereNeedsShippingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod wherePriceWillBeCalculated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryMethod whereUpdatedAt($value)
 */
	class DeliveryMethod extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Note
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $content
 * @property int|null $user_id
 * @property int $notable_id
 * @property string $notable_type
 * @method static \Illuminate\Database\Eloquent\Builder|Note newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note query()
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereNotableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereNotableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Note whereUserId($value)
 */
	class Note extends \Eloquent {}
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
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Note[] $notes
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
 * @property-read int|null $notes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OrderedItem[] $orderedItems
 * @property-read int|null $ordered_items_count
 * @property-read \App\Models\PaymentMethod|null $paymentMethod
 * @property-read \App\Models\ShippingDetail|null $shippingDetail
 * @property-read \App\Models\Status|null $status
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereBillingDetailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCustomerNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingDetailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTaxDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereVariableSymbol($value)
 */
	class Order extends \Eloquent {}
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
 * @property string $price
 * @property string $vatrate
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
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem whereCatalog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderedItem whereVatrate($value)
 */
	class OrderedItem extends \Eloquent {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereHideFromBlog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedAt($value)
 */
	class Page extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\PaymentMethod
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array $name
 * @property string $price
 * @property string|null $mov
 * @property int $price_will_be_calculated
 * @property int $enabled
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DeliveryMethod[] $deliveryMethods
 * @property-read int|null $delivery_methods_count
 * @property-read mixed $formatted_price
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereMov($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod wherePriceWillBeCalculated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereUpdatedAt($value)
 */
	class PaymentMethod extends \Eloquent {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|Preference newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Preference newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Preference query()
 * @method static \Illuminate\Database\Eloquent\Builder|Preference whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preference whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preference whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preference wherePreferableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preference wherePreferableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Preference whereUpdatedAt($value)
 */
	class Preference extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Price
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $price
 * @property string|null $old_price
 * @property int $product_id
 * @property int $price_level_id
 * @property-read \App\Models\PriceLevel $priceLevel
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|Price newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Price newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Price query()
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereOldPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price wherePriceLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereUpdatedAt($value)
 */
	class Price extends \Eloquent {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|PriceLevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceLevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceLevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceLevel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceLevel whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceLevel whereHasQuantityDiscounts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceLevel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceLevel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceLevel whereUpdatedAt($value)
 */
	class PriceLevel extends \Eloquent {}
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
 * @property string $vatrate
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
 * @property-read mixed $formatted_old_price
 * @property-read mixed $formatted_price
 * @property-read mixed $formatted_price_excl_vat
 * @property-read mixed $formatted_vatrate
 * @property-read mixed $old_price
 * @property-read mixed $photos
 * @property-read mixed $price
 * @property-read mixed $price_excl_vat
 * @property-read mixed $public_stock_quantity
 * @property-read mixed $purchasable
 * @property-read mixed $thumbnail
 * @property-read mixed $thumbnails
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Note[] $notes
 * @property-read int|null $notes_count
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
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereAvailabilityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCatalog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMoq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMultiplyOfMoqOnly($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQuantityInStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereVatrate($value)
 */
	class Product extends \Eloquent implements \Gloudemans\Shoppingcart\Contracts\Buyable, \Spatie\MediaLibrary\HasMedia {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property query()
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property wherePropertyTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property wherePropertyValueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereUpdatedAt($value)
 */
	class Property extends \Eloquent {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyType whereIsHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyType whereIsSortable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyType whereUpdatedAt($value)
 */
	class PropertyType extends \Eloquent {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyValue whereValue($value)
 */
	class PropertyValue extends \Eloquent {}
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
 * @property int $system_field
 * @property-read mixed $name
 * @property-read mixed $value
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereNamespace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereSchema($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereSystemField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 */
	class Setting extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingDetail whereZipcode($value)
 */
	class ShippingDetail extends \Eloquent {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereIsFinal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUpdatedAt($value)
 */
	class Status extends \Eloquent {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereLike($column, $keyword)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereLikeQuery($column, $keyword)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereValue($value)
 */
	class Tag extends \Eloquent {}
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
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereAbbr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereLike($column, $keyword)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereLikeQuery($column, $keyword)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUpdatedAt($value)
 */
	class Unit extends \Eloquent {}
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
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Note[] $notes
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
 * @property-read int|null $notes_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ShippingDetail[] $shippingDetails
 * @property-read int|null $shipping_details_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePriceLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereReceiveNewsletter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

