<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Point extends Model
{
    protected $fillable = ['amount', 'birder_id', 'listcategory_id'];

    public function submitter()
    {
        return $this->belongsTo('App\Birder');
    }

    public function category()
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
