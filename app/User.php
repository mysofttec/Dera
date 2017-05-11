<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Billable;
    use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function fileentry()
    {
        return $this->hasMany('App\Fileentry');
    }

    public function roles() {
        return $this->belongsToMany('App\Role');
}
    public function getId()
    {
        return $this->id;
    }
}
