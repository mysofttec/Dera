<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function filenetries()
    {
        return $this->hasMany('App\Fileentry');

    }
}
