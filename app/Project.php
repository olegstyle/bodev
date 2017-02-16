<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function group_id() {
        return $this->belongsToMany(ProjectGroup::class);
    }
}
