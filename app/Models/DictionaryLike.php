<?php

namespace App\Models;

use App\Models\Interfaces\DictionaryBase;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DictionaryLike
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $f_app_name
 * @property int $e_dict
 * @property int $f_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryLike whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryLike whereEDict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryLike whereFAppName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryLike whereFCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryLike whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DictionaryLike whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DictionaryLike extends DictionaryBase
{
    /** @var string */
    protected $table = 'dictionary_like';

    protected $fillable = ['f_app_name', 'e_dict', 'f_count'];
}
