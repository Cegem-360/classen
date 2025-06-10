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
    public const int BLOG = 1;

    public const int MAINPAGE = 17;

    public const int OptionTwo = 1;

    public const int OptionThree = 2;
}
