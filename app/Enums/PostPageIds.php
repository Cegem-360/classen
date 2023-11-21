<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static BLOG()
 * @method static static MAINPAGE()
 */
final class PostPageIds extends Enum
{
    const BLOG = 1;
    const MAINPAGE = 17;
    const OptionTwo = 1;
    const OptionThree = 2;
}
