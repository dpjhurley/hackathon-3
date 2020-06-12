<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class species extends Model
{
    public function doctors()
    {
        return $this->belongsToMany('App\Doctor', 'doctor_species', 'species_id', 'doctor_id');
    }

    public function pets()
    {
        return $this->hasMany('App\Pet');
    }
}
