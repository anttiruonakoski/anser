<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birder extends Model
{
    protected $fillable = ['name'];

    public function points()
    {
        return $this->hasMany('App\Point');
    }

}
