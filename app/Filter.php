<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    //
    protected $table="filters";

    public function portfolio(){
        return $this->belongsToMany('App\Portfolio','filters_id','id');
    }
}
