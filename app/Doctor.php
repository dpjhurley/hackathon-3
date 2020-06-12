<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    public function species()
    {
        return $this->belongsToMany('App\Species', 'doctor_species', 'species_id', 'doctor_id');
    }
}
