<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name
 * @property string $image_url
 * @property int $level
 * @property string $date_start
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 *
 * @property_read \App\TechnicalStackGroup|null $group
 *
 * @method static Builder|static whereCreatedAt($value)
 * @method static Builder|static whereDateStart($value)
 * @method static Builder|static whereGroupId($value)
 * @method static Builder|static whereId($value)
 * @method static Builder|static whereImageUrl($value)
 * @method static Builder|static whereLevel($value)
 * @method static Builder|static whereName($value)
 * @method static Builder|static whereUpdatedAt($value)
 *
 * @mixin Builder
 */
class TechnicalStack extends Model
{
    public function groupId(): BelongsTo
    {
        return $this->belongsTo(TechnicalStackGroup::class);
    }
}
