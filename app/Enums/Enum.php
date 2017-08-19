<?php

namespace App\Enums;

use Illuminate\Support\Facades\Lang;
use ReflectionClass;

/**
 * Class Enum
 * @package App\Enums
 *
 * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
 */
abstract class Enum
{
    /**
     * get reflection
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @return ReflectionClass
     */
    private static function reflection()
    {
        return new ReflectionClass(static::class);
    }

    /**
     * getAll
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @return array
     */
    public static function toArray()
    {
        return self::reflection()->getConstants();
    }

    /**
     * getName
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param mixed $value
     * @return string|null
     */
    public static function getName($value)
    {
        $all = array_flip(static::toArray());
        return isset($all[$value]) ? $all[$value] : null;
    }

    /**
     * isValid
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param $value
     * @return bool
     */
    public static function isValid($value)
    {
        $all = array_flip(static::toArray());
        return isset($all[$value]);
    }

    /**
     * getAllWithTranslation
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @return array|bool
     */
    public static function getAllWithTranslation()
    {
        $all = array_flip(static::toArray());
        foreach ($all as $key => $value) {
            $value = strtolower($value);
            $l = 'enum.enum_' . $value;
            if (Lang::has($l)) {
                $all[$key] = __($l);
            } else {
                $all[$key] = ucfirst(preg_replace('/_/', ' ', $value));
            }
        }
        return $all;
    }
}
