<?php

namespace App\Http\Controllers\Admin;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class TeamEditController extends Controller
{
    public function execute(Team $team,Request $request){
        if($request->isMethod('delete')){
            if(env('DELETE_IMAGE')){
                $path = public_path().'/img/'.$team->img;
                if(is_file($path)){
                    unlink($path);
                }
            }
            $team->delete();
            return redirect()->route('team')->with('status',env('TEAM_DELETE'));
        }
        if($request->isMethod('post')){
            $input= $request->except('_token');
            $validation = Validator::make($input,[
                'name'=>'required|max:100',
                'position'=>'required|max:100',
                'text'=>'required',
                'old_img'=>'required'
            ]);

            if($validation->fails()){
                return redirect()->route('teamEdit',['team'=>$team->id])->withErrors($validation)->withInput();
            }
            if($request->hasFile('img')){
                $pathFile =public_path().'/img/'.$team->img;
                if(is_file($pathFile)){
                    unlink($pathFile);
                }
                $file=$request->file('img');
                $input['img']=$input['name'].'_'.$file->getClientOriginalName();
                $file->move(public_path().'/img',$input['img']);
            }else{
                $input['img']=$input['old_img'];
            }
            unset($input['old_img']);
            $team->fill($input);
            if ($team->update()){
                return redirect()->route('team')->with('status',env('TEAM_UPDATE'));
            }
        }
        if (view()->exists('admin.team_edit')){
            $old=$team->toArray();
            $data=[
                'title'=>'Admin-TeamEditController',
                'team'=>$old,
            ];
            return view('admin.team_edit',$data);
        }
        abort(404);
    }
}
