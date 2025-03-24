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
 * 
 *
 * @property int $id
 * @property int $category_id
 * @property bool $primo_finishing
 * @property bool $3d_finishing
 * @property bool $iridium_finishing
 * @property bool $cpl_laminate
 * @property bool $hpl_laminate
 * @property bool $lacquered
 * @property bool $room_door
 * @property bool $inner_door
 * @property bool $interior_entrance_door
 * @property bool $technical_doors
 * @property bool $fire_door
 * @property bool $anti_burglary_door
 * @property bool $soundproof_door
 * @property bool $sliding_door
 * @property bool $modern
 * @property bool $classic
 * @property bool $loft
 * @property bool $retro
 * @property bool $rustic
 * @property bool $wood_door
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute where3dFinishing($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereAntiBurglaryDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereClassic($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereCplLaminate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereFireDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereHplLaminate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereInnerDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereInteriorEntranceDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereIridiumFinishing($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereLacquered($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereLoft($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereModern($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute wherePrimoFinishing($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereRetro($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereRoomDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereRustic($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereSlidingDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereSoundproofDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereTechnicalDoors($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AdditionalAttribute whereWoodDoor($value)
 */
	final class AdditionalAttribute extends \Eloquent {}
}

namespace App\Models{
/**
 * 
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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereValue($value)
 */
	final class Attribute extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string $img_url
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\BlogFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Blog whereUpdatedAt($value)
 */
	final class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $category_id
 * @property array<array-key, mixed>|null $door_specification
 * @property array<array-key, mixed>|null $technical_parameter
 * @property array<array-key, mixed>|null $additional_options
 * @property array<array-key, mixed>|null $gallery_imgs
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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereAdditionalOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereBreadcrumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereDoorSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereGalleryImgs($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereTechnicalParameter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereUpdatedAt($value)
 */
	final class Category extends \Eloquent implements \Spatie\Sitemap\Contracts\Sitemapable {}
}

namespace App\Models{
/**
 * 
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
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Door|null $door
 * @method static \Database\Factories\ColorFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Color newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Color newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Color query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Color whereBigImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Color whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Color whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Color whereDoorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Color whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Color whereMaterialCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Color whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Color whereSmallImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Color whereUpdatedAt($value)
 */
	final class Color extends \Eloquent {}
}

namespace App\Models{
/**
 * 
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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door whereImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door whereTagCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door whereTagImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door whereTagName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Door whereUpdatedAt($value)
 */
	final class Door extends \Eloquent implements \Spatie\Sitemap\Contracts\Sitemapable {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $collection_name
 * @property string|null $meta_description
 * @property string|null $key_words
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetaKeyWords newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetaKeyWords newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetaKeyWords query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetaKeyWords whereCollectionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetaKeyWords whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetaKeyWords whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetaKeyWords whereKeyWords($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetaKeyWords whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetaKeyWords whereUpdatedAt($value)
 */
	final class MetaKeyWords extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Parameter
 *
 * @method static \Database\Factories\ParameterFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Parameter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Parameter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Parameter query()
 */
	final class Parameter extends \Eloquent {}
}

namespace App\Models{
/**
 * 
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
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\QuotationItem> $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Quotation withoutTrashed()
 */
	final class Quotation extends \Eloquent {}
}

namespace App\Models{
/**
 * 
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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuotationItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuotationItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuotationItem query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuotationItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuotationItem whereDoorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuotationItem whereFrame($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuotationItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuotationItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuotationItem whereQuotationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|QuotationItem whereUpdatedAt($value)
 */
	final class QuotationItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tag whereUpdatedAt($value)
 */
	final class Tag extends \Eloquent {}
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
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	final class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $page
 * @property string $img_url
 * @property string $text
 * @property string $link_title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WebsiteOptions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WebsiteOptions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WebsiteOptions query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WebsiteOptions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WebsiteOptions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WebsiteOptions whereImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WebsiteOptions whereLinkTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WebsiteOptions whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WebsiteOptions wherePage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WebsiteOptions whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WebsiteOptions whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|WebsiteOptions whereUpdatedAt($value)
 */
	final class WebsiteOptions extends \Eloquent {}
}

