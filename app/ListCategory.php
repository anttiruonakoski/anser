<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ListCategory extends Model
{
    protected $fillable = ['category'];

    public function points()

    {
        return $this->hasMany('App\Point');
    }

    public function scopeListCategoryHasPoints($query)
    {
        return $query->where('amount','>' ,0)->get()->unique('listcategory_id')->pluck('listcategory_id');
    }
}


