<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AdditionalAttribute
 *
 * @property-read \App\Models\Category|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute query()
 */
	class AdditionalAttribute extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Attribute
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Category> $categories
 * @property-read int|null $categories_count
 * @method static \Database\Factories\AttributeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute query()
 */
	class Attribute extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property-read \App\Models\AdditionalAttribute|null $AdditionalAttribute
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attribute> $attributes
 * @property-read int|null $attributes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Door> $doors
 * @property-read int|null $doors_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Parameter> $parameters
 * @property-read int|null $parameters_count
 * @method static \Database\Factories\CategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Color
 *
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Door|null $door
 * @method static \Database\Factories\ColorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Color newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color query()
 */
	class Color extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Door
 *
 * @property-read \App\Models\Category|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Color> $colors
 * @property-read int|null $colors_count
 * @method static \Database\Factories\DoorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Door newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Door newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Door query()
 */
	class Door extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Parameter
 *
 * @method static \Database\Factories\ParameterFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Parameter query()
 */
	class Parameter extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Quotation
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\QuotationItem> $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation query()
 */
	class Quotation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QuotationItem
 *
 * @property-read \App\Models\Door|null $door
 * @property-read \App\Models\Quotation|null $quotation
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem query()
 */
	class QuotationItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 */
	class Tag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WebsiteOptions
 *
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteOptions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteOptions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteOptions query()
 */
	class WebsiteOptions extends \Eloquent {}
}

