<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\ProjectTechnicalStack
 *
 * @property \Illuminate\Database\Eloquent\Collection|\App\Project $projectId
 * @property \Illuminate\Database\Eloquent\Collection|\App\TechnicalStack $techId
 *
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $id
 *
 * @method static Builder|static whereCreatedAt($value)
 * @method static Builder|static whereId($value)
 * @method static Builder|static whereProjectId($value)
 * @method static Builder|static whereTechId($value)
 * @method static Builder|static whereUpdatedAt($value)
 *
 * @mixin Builder
 */
class ProjectTechnicalStack extends Model
{
    public function projectId(): BelongsTo
    {
        return $this->belongsTo(Project::class); // Voyager required
    }

    public function techId(): BelongsTo
    {
        return $this->belongsTo(TechnicalStack::class); // Voyager required
    }
}
