<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = ['amount'];

    public function submitter()
    {
        return $this->hasOne('App\Birder');
    }

    public function category()
    {
        return $this->hasOne('App\ListCategory');
    }

}
