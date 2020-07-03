<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Store
 *
 * @property int $id
 * @property string $name
 * @property string $domain
 * @property string $database
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Spatie\Multitenancy\TenantCollection|static[] all($columns = ['*'])
 * @method static \Spatie\Multitenancy\TenantCollection|static[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereDatabase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereDomain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUpdatedAt($value)
 */
	class Store extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PaymentMethod
 *
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentMethod query()
 */
	class PaymentMethod extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PropertyType
 *
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PropertyType query()
 */
	class PropertyType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Availability
 *
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Availability query()
 */
	class Availability extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Country
 *
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country query()
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Unit
 *
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Unit query()
 */
	class Unit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Status
 *
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status query()
 */
	class Status extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Currency
 *
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Currency query()
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeliveryMethod
 *
 * @property-read array $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DeliveryMethod query()
 */
	class DeliveryMethod extends \Eloquent {}
}

