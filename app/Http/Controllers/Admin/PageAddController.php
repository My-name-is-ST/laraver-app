<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Page;

class PageAddController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('post')) {
            $intup = $request->except('_token');
            $validator=Validator::make($intup,[
                'name'=>'required|max:100',
                'alias'=>'required|unique:pages|max:100',
                'text'=>'required',
                'img'=>'required'
            ]);
            if($validator->fails() || (!$request->hasFile('img'))){
                return redirect()->route('pagesAdd')->withErrors($validator)->withInput();
            }
            $img =$request->file('img');
            $intup['img']=$intup['name'].'_'.$img->getClientOriginalName();
            $img->move(public_path().'/img',$intup['img']);
            $page = new Page();
            $page->fill($intup);
            if($page->save()){
                return redirect()->route('pages')->with('status',env('PAGE_CREATE'));
            }
        }
        if(view()->exists('admin.page_add')){
            $data=[
                'title'=> 'NEW PAGE'
            ];
            return view('admin.page_add',$data);
        }
        abort(404);
    }
}
