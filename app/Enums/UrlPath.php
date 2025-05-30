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
    const BASEURL = 'https://admin.classen.cegem360.hu/wp-json/wp/v2/';

    const BASEURLWC = 'https://admin.classen.cegem360.hu';

    const BASEURLCOSTOME = 'https://admin.classen.cegem360.hu/wp-json/custom/v1/';

    const OptionTwo = 1;

    const OptionThree = 2;
}
