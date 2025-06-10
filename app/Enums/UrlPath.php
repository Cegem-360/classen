<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static BASEURL()
 * @method static static BASEURLWC()
 * @method static static OptionThree()
 */
final class UrlPath extends Enum
{
    public const string BASEURL = 'https://admin.classen.cegem360.hu/wp-json/wp/v2/';

    public const string BASEURLWC = 'https://admin.classen.cegem360.hu';

    public const string BASEURLCOSTOME = 'https://admin.classen.cegem360.hu/wp-json/custom/v1/';

    public const int OptionTwo = 1;

    public const int OptionThree = 2;
}
