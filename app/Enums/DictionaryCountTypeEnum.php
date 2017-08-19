<?php

namespace App\Enums;

/**
 * Class DictionaryCountTypeEnum
 * @package App\Enums
 *
 * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
 */
class DictionaryCountTypeEnum extends Enum
{
    const SHARE_REDIRECT = 'redirect';
    const SHARE = 'share';
    const SHOW = 'show';
    const LIKE = 'like';
}
