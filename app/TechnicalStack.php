<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechnicalStack extends Model
{
    public function group_id() {
        return $this->belongsToMany(TechnicalStackGroup::class);
    }
}