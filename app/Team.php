<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected  $table="teams";

    protected $fillable=[
        'name',
        'position',
        'img',
        'text',
        'create_at',
        'update_at',
        'twitter',
        'facebook',
        'google_plus',
        'pinterest'
    ];
}
