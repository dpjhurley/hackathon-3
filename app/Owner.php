<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    public function pets()
    {
        return $this->hasMany('App\Pet');
    }
}
