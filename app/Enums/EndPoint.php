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
    public const string POSTS = 'posts/';

    public const string MAEDIA = 'media/';

    public const string PAGES = 'pages/';

    public const string DESIGFORMS = 'design_forms/';

    public const string CATEGORIES = 'categories/';

    public const string CATEGORY = 'category/';

    public const string PRODUCTS = 'products';

    public const string PRODUCTSCATEGORIES = 'products/categories';

    public const string PRODUCTSTAGS = 'products/tags';

    public const string COLLECTIONS = 'collections/';

    public const string LARAVELWEBSITEOPTIONS = 'laravel/options/';
}
