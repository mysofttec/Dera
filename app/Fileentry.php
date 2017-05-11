<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fileentry extends Model
{
    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
    public function license()
    {
        return $this->hasOne('App\License');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }

}
