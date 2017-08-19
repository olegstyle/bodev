<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DictionaryCounter
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $f_app_name
 * @property int $e_dict
 * @property string $f_type
 * @property int|null $f_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryCounter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryCounter whereEDict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryCounter whereFAppName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryCounter whereFCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryCounter whereFType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryCounter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryCounter whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DictionaryCounter extends Model
{
    /** @var string */
    protected $table = 'dictionary_counter';

    protected $fillable = ['f_app_name', 'e_dict', 'f_type', 'f_count'];
    protected $visible = ['f_app_name', 'e_dict', 'f_type', 'f_count'];

    /**
     * getDict
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $dict
     * @param string $type
     * @return DictionaryCounter|Model
     */
    public static function getDict($appName, $dict, $type)
    {
        return static::firstOrCreate([
            'f_app_name' => $appName,
            'f_type' => $type,
            'e_dict' => $dict],
            ['f_count' => 0]);
    }

    /**
     * incrementDict
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @param string $appName
     * @param int $dict
     * @param string $type
     * @return DictionaryCounter|Model
     */
    public static function incrementDict($appName, $dict, $type)
    {
        $d = static::getDict($appName, $dict, $type);
        $d->increment('f_count', 1);
        $d->save();
        return $d;
    }
}
