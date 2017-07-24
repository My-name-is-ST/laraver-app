<?php
/**
 * Created by PhpStorm.
 * User: Станислав
 * Date: 17.07.17
 * Time: 22:23
 */

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function execute(){
        if(view()->exists('admin.client')){
            $clients=Client::all();
            $data=[
                'title'=>'Admin-ClientController',
                'clients'=>$clients,
            ];
            return view('admin.client',$data);
        }
        abort(404);
    }
}