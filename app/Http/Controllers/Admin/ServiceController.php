<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
class ServiceController extends Controller
{
    public function execute(){

        if(view()->exists('admin.service')){
            $services=Service::all();
            $data=[
              'title'=>'Admin Service Controller',
                'services'=>$services
            ];
            return view('admin.service',$data);
        }
        abort(404);
    }
}
