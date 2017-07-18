<?php

namespace App\Http\Controllers\Admin;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class ServiceEditController extends Controller
{
    public function execute(Service $service,Request $request){
        if($request->isMethod('delete')){
            $service->delete();
            return redirect()->route('service')->with('status',env('SERVICE_DELETE'));
        }
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
            strtolower($input['icon']);
            $service->fill($input);
            if($service->update()){
                return redirect()->route('service')->with('status',env('SERVICE_UPDATE'));
            }
        }
        if(view()->exists('admin.service_edit')){
            $old =$service->toArray();
            $data=[
                'title'=>'Service Edit Controller',
                'service'=>$service
            ];
            return view('admin.service_edit',$data);
        }
        abort(404);
    }
}
