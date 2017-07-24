<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filter;

class Portfolio extends Model
{
    //
    protected $table="portfolios";

    protected $fillable=[
        'link',
        'name',
        'img',
        'filter_id',
        'create_at',
        'update_at'
    ];

    public function filter(){
        return $this->hasOne('App\Filter','id','filter_id');
    }

}
