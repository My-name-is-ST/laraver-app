<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use Validator;

class PageEditController extends Controller
{
    public function execute(Page $page,Request $request){
        if($request->isMethod('delete')){
            if(env('DELETE_IMAGE')){
                $path = public_path().'/img/'.$page->img;
                if(is_file($path)){
                    unlink($path);
                }
            }
            $page->delete();
            return redirect()->route('pages')->with('status', env('PAGE_DELETE'));
        }
        if($request->isMethod('post')) {
            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'name' => 'required|max:100',
                'alias' => 'required|max:100|unique:pages,alias,' . $input['id'],
                'text' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->route('pagesEdit', ['page' => $input['id']])->withErrors($validator);
            }
            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $input['img'] = $input['name'] . '_' . $file->getClientOriginalName();
                $old_file = public_path() . '\img\\' . $input['old_img'];
                $f = is_file($old_file);
                if ($f) {
                    unlink($old_file);
                }
                $file->move(public_path() . '/img', $input['img']);
            } else {
                $input['img'] = $input['old_img'];
            }
            unset($input['old_img']);
            $page->fill($input);
            if ($page->update()) {
                return redirect()->route('pages')->with('status', env('PAGE_UPDATE'));
            }
        }
        $old =$page->toArray();
        if(view()->exists('admin.page_edit')){
            $data=[
              'title'=>'Edit page-'.$old['name'],
                'data'=>$old
            ];
            return view('admin.page_edit',$data);
        }
        abort(404);
    }
}
