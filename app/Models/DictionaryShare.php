<?php

namespace App\Models;

use App\Models\Interfaces\DictionaryBase;

/**
 * App\Models\DictionaryShare
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $f_app_name
 * @property int $e_dict
 * @property int $f_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryShare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryShare whereEDict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryShare whereFAppName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryShare whereFCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryShare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryShare whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DictionaryShare extends DictionaryBase
{
    /** @var string */
    protected $table = 'dictionary_share';

    protected $fillable = ['f_app_name', 'e_dict', 'f_count'];
}
