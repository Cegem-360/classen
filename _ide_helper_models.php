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
 * @property int $id
 * @property bool $primo_finishing
 * @property bool $3d_finishing
 * @property bool $iridium_finishing
 * @property bool $cpl_laminate
 * @property bool $hpl_laminate
 * @property bool $lacquered
 * @property bool $room_door
 * @property bool $bathroom_door
 * @property bool $interior_entrance_door
 * @property bool $technical_doors
 * @property bool $fire_door
 * @property bool $anti_burglary_door
 * @property bool $soundproof_door
 * @property bool $sliding_door
 * @property bool $modern
 * @property int $classic
 * @property bool $loft
 * @property bool $retro
 * @property bool $rustic
 * @property bool $width_60
 * @property bool $width_70
 * @property bool $width_80
 * @property bool $width_90
 * @property bool $width_100
 * @property bool $width_110
 * @property bool $width_120
 * @property bool $panel_doors
 * @property bool $framed_doors
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute where3dFinishing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereAntiBurglaryDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereBathroomDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereClassic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereCplLaminate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereFireDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereFramedDoors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereHplLaminate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereInteriorEntranceDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereIridiumFinishing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereLacquered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereLoft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereModern($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute wherePanelDoors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute wherePrimoFinishing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereRetro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereRoomDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereRustic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereSlidingDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereSoundproofDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereTechnicalDoors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereWidth100($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereWidth110($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereWidth120($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereWidth60($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereWidth70($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereWidth80($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdditionalAttribute whereWidth90($value)
 */
	class AdditionalAttribute extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Attribute
 *
 * @property int $id
 * @property string $name
 * @property string $value
 * @property string $img
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Category> $categories
 * @property-read int|null $categories_count
 * @method static \Database\Factories\AttributeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereValue($value)
 */
	class Attribute extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $category_id
 * @property array|null $door_specification
 * @property array|null $technical_parameter
 * @property array|null $additional_options
 * @property array|null $gallery_imgs
 * @property string|null $breadcrumb
 * @property string|null $img_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
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
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereAdditionalOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereBreadcrumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDoorSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereGalleryImgs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereTechnicalParameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Color
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $small_img
 * @property string|null $big_img
 * @property string|null $material_category
 * @property int $category_id
 * @property int $door_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\Door $door
 * @method static \Database\Factories\ColorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Color newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Color query()
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereBigImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereDoorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereMaterialCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereSmallImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Color whereUpdatedAt($value)
 */
	class Color extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Door
 *
 * @property int $id
 * @property int|null $product_id
 * @property int|null $price
 * @property string $name
 * @property string $img_url
 * @property string $tag
 * @property string $tag_name
 * @property string $tag_img_url
 * @property string $tag_category
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Color> $colors
 * @property-read int|null $colors_count
 * @method static \Database\Factories\DoorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Door newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Door newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Door query()
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereTagCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereTagImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereTagName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Door whereUpdatedAt($value)
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
 * @property int $id
 * @property string $session_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\QuotationItem> $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quotation whereUpdatedAt($value)
 */
	class Quotation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QuotationItem
 *
 * @property int $id
 * @property int $quotation_id
 * @property int $door_id
 * @property string|null $frame
 * @property int $quantity
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Door|null $door
 * @property-read \App\Models\Quotation|null $quotation
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereDoorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereFrame($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereQuotationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuotationItem whereUpdatedAt($value)
 */
	class QuotationItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
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
 * @property int $id
 * @property string $name
 * @property string $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteOptions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteOptions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteOptions query()
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteOptions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteOptions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteOptions whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteOptions whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteOptions whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteOptions whereValue($value)
 */
	class WebsiteOptions extends \Eloquent {}
}

