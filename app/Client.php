<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected  $table="clients";

    protected $fillable=[
        'alias',
        'icon',
        'link',
        'create_at',
        'update_at'
    ];
}
