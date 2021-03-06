<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Point extends Model
{
    protected $fillable = ['amount', 'birder_id', 'listcategory_id','newest_species'];
    protected $dates = ['newest_date'];

    public function birder()
    {
        return $this->belongsTo('App\Birder');
    }

    public function listcategory()
    {
        return $this->belongsTo('App\ListCategory');
    }

    public function xsave()
    {
    	return $this->save();
    }

    public function scopeUsedListCategories($query)
    {
        return $query->where('amount','>',0)->get()->unique('listcategory_id')->pluck('listcategory_id');
    }
    public function scopeSubmittingBirders($query)
    {
        return $query->where('amount','>',0)->get()->unique('birder_id')->pluck('birder_id');
    }

}
