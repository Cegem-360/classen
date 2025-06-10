<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static POSTS()
 * @method static static PAGES()
 * @method static static CATEGORIES()
 * @method static static PRODUCTS()
 * @method static static PRODUCTSCATEGORIES()
 * @method static static PRODUCTSTAGS()
 * @method static static COLLECTIONS()
 */
final class EndPoint extends Enum
{
    public const POSTS = 'posts/';

    public const MAEDIA = 'media/';

    public const PAGES = 'pages/';

    public const DESIGFORMS = 'design_forms/';

    public const CATEGORIES = 'categories/';

    public const CATEGORY = 'category/';

    public const PRODUCTS = 'products';

    public const PRODUCTSCATEGORIES = 'products/categories';

    public const PRODUCTSTAGS = 'products/tags';

    public const COLLECTIONS = 'collections/';

    public const LARAVELWEBSITEOPTIONS = 'laravel/options/';
}
