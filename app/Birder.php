<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Birder extends Model
{
    protected $fillable = ['name'];
    protected $primaryKey = 'id';

    public function points()
    {
        return $this->hasMany('App\Point');
    }

    public function nonZeroPoints()
    {
        return $this->points()->where('amount','>',0);
    }

        public function countPoints()
    {
        return $this->points()->where('amount','>',0)->count();
    }

    public function pointsAmountInCategory($c)
    {
        return $this->points()->where ('listcategory_id', $c )->first()->amount;
    }

    public function newestSpeciesInCategory($c)
    {
        return $this->points()->where ('listcategory_id', $c )->first()->newest_species;
    }

    public function pointsInCategory($c)
    {
        return $this->points()->where ('listcategory_id', $c )->first();
    }

/*    public function scopeHasPointsInCategory($query, $c)
    {
    	return $query->points()->where('listcategory_id', $c)->count() > 0;
    }*/

    public function hasPointsInCategory($c)
    {
        return ($this->points()->where('listcategory_id', $c)->count() > 0);
    }

    public function sav($c)
    {
        return $this->points()->where ('listcategory_id', $c )->first();
    }

}
