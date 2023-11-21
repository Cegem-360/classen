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
 */
final class EndPoint extends Enum
{
    const POSTS = 'posts/';
    const MAEDIA = 'media/';
    const PAGES = 'pages/';
    const DESIGFORMS = 'design_forms/';
    const CATEGORIES = 'categories/';
    const CATEGORY = 'category/';
    const PRODUCTS = 'products';
    const PRODUCTSCATEGORIES = 'products/categories';
    const PRODUCTSTAGS = 'products/tags';
}
