<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birder extends Model
{
    protected $fillable = ['name'];
    protected $primaryKey = 'id';

    public function points()
    {
        return $this->hasMany('App\Point');
    }

    public function PointsAmountInCategory($c)
    {
        return $this->points()->where ('listcategory_id', $c )->first()->amount;
    }

    public function hasPointsInCategory($c)
    {
    	return ($this->points()->where('listcategory_id', $c)->count() > 0);
    }

    public function sav($c)
    {
        return $this->points()->where ('listcategory_id', $c )->first();
    }

}
