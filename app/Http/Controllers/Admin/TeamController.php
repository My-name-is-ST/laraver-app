<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;

class TeamController extends Controller
{
    public function execute(){
        if(view()->exists('admin.team')){
            $teams=Team::all();
            $data=[
                'title'=>'Admin Team Controller',
                'teams'=>$teams
            ];
            return view('admin.team',$data);
        }
        abort(404);
    }
}
