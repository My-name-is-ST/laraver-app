<?php
/**
 * Created by PhpStorm.
 * User: Станислав
 * Date: 15.07.17
 * Time: 13:36
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function execute($alias,Request $request){
        if(!$alias){
            abort(404);
        }
        if(view()->exists('site.pages')){
            $page=Page::where('alias',strip_tags($alias))->first();
            $data=['title'=>$page->name,'page'=>$page];

            return view('site.pages',$data);
        }
        abort(404);
    }
}