<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    public function species() 
    {
        return $this->belongsTo('App\Species');
    }

    public function owners() 
    {
        return $this->belongsTo('App\Owner');
    }
}
