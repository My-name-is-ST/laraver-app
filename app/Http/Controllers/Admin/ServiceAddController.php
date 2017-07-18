<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Service;
class ServiceAddController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('post')){
            $input= $request->except('_token');
            $validate=Validator::make($input,[
                'name'=>'required|max:100',
                'icon'=>'required|max:100',
                'text'=>'required',
            ]);
            if($validate->fails()){
                return redirect()->route('serviceEdit')->withErrors($validate)->withInput();
            }
            $service =new Service();
            $service->fill($input);
            strtolower($input['icon']);
            if($service->save()){
                return redirect()->route('service')->with('status',env('SERVICE_CREATE'));
            }
        }
        if(view()->exists('admin.service_add')){
            $data=[
                'title'=>'Service Add controller'
            ];
            return view('admin.service_add',$data);
        }
        abort(404);
    }
}
