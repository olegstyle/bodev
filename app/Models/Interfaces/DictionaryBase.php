<?php

namespace App\Models\Interfaces;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Interfaces
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $f_app_name
 * @property int $e_dict
 * @property int $f_count
 * @mixin \Eloquent
 */
abstract class DictionaryBase extends Model
{
    /**
     * getDict
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $e_dict
     * @return DictionaryBase|Model
     */
    public static function getDict($appName, $e_dict)
    {
        return static::firstOrCreate(['f_app_name' => $appName, 'e_dict' => $e_dict], ['f_count' => 0]);
    }

    /**
     * incrementDict
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $e_dict
     * @return DictionaryBase|Model
     */
    public static function incrementDict($appName, $e_dict)
    {
        $d = static::getDict($appName, $e_dict);
        $d->increment('f_count');
        $d->save();
        return $d;
    }

    protected $visible = ['f_app_name', 'e_dict', 'f_count'];
}