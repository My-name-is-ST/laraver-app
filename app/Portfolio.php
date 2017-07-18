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
        'filters_id',
        'create_at',
        'update_at'
    ];

    public function filter(){
        return $this->hasOne('App\Filter','id','filters_id');
    }

}
