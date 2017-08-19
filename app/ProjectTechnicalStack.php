<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ProjectTechnicalStack
 *
 * @property \Illuminate\Database\Eloquent\Collection|\App\Project[] $project_id
 * @property \Illuminate\Database\Eloquent\Collection|\App\TechnicalStack[] $tech_id
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

    public function project_id() {
        return $this->belongsToMany(Project::class);
    }


    public function tech_id() {
        return $this->belongsToMany(TechnicalStack::class);
    }

}
