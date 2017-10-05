<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ProjectTechnicalStack
 *
 * @property \Illuminate\Database\Eloquent\Collection|\App\Project $projectId
 * @property \Illuminate\Database\Eloquent\Collection|\App\TechnicalStack $techId
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectTechnicalStack whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectTechnicalStack whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectTechnicalStack whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectTechnicalStack whereTechId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ProjectTechnicalStack whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectTechnicalStack extends Model
{

    public function projectId()
    {
        return $this->belongsTo(Project::class);
    }


    public function techId()
    {
        return $this->belongsTo(TechnicalStack::class);
    }

}
