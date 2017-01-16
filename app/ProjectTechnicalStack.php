<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTechnicalStack extends Model
{

    public function project_id() {
        return $this->belongsToMany(Project::class);
    }


    public function tech_id() {
        return $this->belongsToMany(TechnicalStack::class);
    }

}
