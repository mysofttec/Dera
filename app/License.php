<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $fillable = [
        'key', 'fileentry_id',
    ];
    public function fileentry()
    {
        return $this->belongsTo('App\Fileentry');
    }
}
