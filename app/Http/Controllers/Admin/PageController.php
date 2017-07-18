<?php
/**
 * Created by PhpStorm.
 * User: Станислав
 * Date: 15.07.17
 * Time: 22:59
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Page;

class PageController extends Controller
{
    public function execute(){
        if(view()->exists('admin.page')){
            $page=Page::all();
            $data=[
                'title'=>'Admin-PageController',
                'pages'=>$page,
            ];
            return view('admin.page',$data);
        }
        abort(404);
    }
}