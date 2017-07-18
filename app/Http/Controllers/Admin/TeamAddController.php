<?php

namespace App\Http\Controllers\Admin;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class TeamAddController extends Controller
{
    public function execute(Request $request){

        if($request->isMethod('post')) {
            $intup = $request->except('_token');
            $validator=Validator::make($intup,[
                'name'=>'required|max:100',
                'position'=>'min:2|max:100',
                'text'=>'required',
                'img'=>'required'
            ]);
            if($validator->fails() || (!$request->hasFile('img'))){
                return redirect()->route('teamAdd')->withErrors($validator)->withInput();
            }
            $img =$request->file('img');
            $intup['img']=$intup['name'].'_'.$img->getClientOriginalName();
            $img->move(public_path().'/img',$intup['img']);
            $team = new Team();
            $team->fill($intup);
            if($team->save()){
                return redirect()->route('team')->with('status',env('TEAM_CREATE'));
            }
        }
        if(view()->exists('admin.team_add')){
            $data=[
                'title'=> 'Admin Team Add Controller'
            ];
            return view('admin.team_add',$data);
        }
        abort(404);
    }
}
