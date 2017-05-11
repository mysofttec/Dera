<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{

    protected $fillable = [
        'name', 'display_name', 'description',
    ];
    public function getPermissionListAttribute()
    {

        return $this->permissions->lists('id')->all();
    }
    public function users() {
        return $this->belongsToMany('App\User');
    }
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }


}
