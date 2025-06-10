<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static BLOG()
 * @method static static MAINPAGE()
 */
final class PostPageIds extends Enum
{
    public const BLOG = 1;

    public const MAINPAGE = 17;

    public const OptionTwo = 1;

    public const OptionThree = 2;
}
