<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $order
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 *
 * @method static Builder|static whereCreatedAt($value)
 * @method static Builder|static whereId($value)
 * @method static Builder|static whereName($value)
 * @method static Builder|static whereOrder($value)
 * @method static Builder|static whereUpdatedAt($value)
 *
 * @mixin Builder
 */
class TechnicalStackGroup extends Model
{
    //
}
