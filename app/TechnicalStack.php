<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\TechnicalStack
 *
 * @property int $id
 * @property string $name
 * @property string $image_url
 * @property int $level
 * @property string $date_start
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property_read \App\TechnicalStackGroup|null $group
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalStack whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalStack whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalStack whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalStack whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalStack whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalStack whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalStack whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicalStack whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TechnicalStack extends Model
{
    public function groupId()
    {
        return $this->belongsTo(TechnicalStackGroup::class);
    }
}