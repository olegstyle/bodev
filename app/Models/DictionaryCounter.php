<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $f_app_name
 * @property int $e_dict
 * @property string $f_type
 * @property int|null $f_count
 *
 * @method static Builder|static whereCreatedAt($value)
 * @method static Builder|static whereEDict($value)
 * @method static Builder|static whereFAppName($value)
 * @method static Builder|static whereFCount($value)
 * @method static Builder|static whereFType($value)
 * @method static Builder|static whereId($value)
 * @method static Builder|static whereUpdatedAt($value)
 *
 * @mixin Builder
 */
class DictionaryCounter extends Model
{
    protected $table = 'dictionary_counter';

    protected $visible = ['f_app_name', 'e_dict', 'f_type', 'f_count'];

    public static function getDict(string $appName, int $dict, string $type): self
    {
        $model = new self();
        $model->f_app_name = $appName;
        $model->f_type = $type;
        $model->e_dict = $dict;
        $model->f_count = 0;
        $model->save();

        return $model;
    }

    public static function incrementDict(string $appName, int $dict, string $type): self
    {
        $d = static::getDict($appName, $dict, $type);
        $d->increment('f_count');
        $d->save();

        return $d;
    }
}
