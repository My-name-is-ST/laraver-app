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
use Illuminate\Http\Request;
use Validator;

class ClientAddController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('post')) {
            $intup = $request->except('_token');
            $validator=Validator::make($intup,[
                'link'=>'required|max:200',
                'alias'=>'required|max:100',
                'icon'=>'required'
            ]);

            if($validator->fails() || (!$request->hasFile('icon'))){
                return redirect()->route('clientAdd')->withErrors($validator)->withInput();
            }
            $img =$request->file('icon');
            $intup['icon']=$intup['alias'].'_'.$img->getClientOriginalName();
            $img->move(public_path().'/img',$intup['icon']);
            $page = new Client();
            $page->fill($intup);
            if($page->save()){
                return redirect()->route('client')->with('status',env('CLIENT_CREATE'));
            }
        }
        if(view()->exists('admin.client_add')){
            $data=[
                'title'=> 'NEW CLIENT'
            ];
            return view('admin.client_add',$data);
        }
        abort(404);
    }
}