<?php

namespace App\Http\Controllers\Admin;

use App\Filter;
use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class PortfolioEditController extends Controller
{
    public function execute(Portfolio $portfolio, Request $request){
        if($request->isMethod('delete')){
            if(env('DELETE_IMAGE')){
                $path = public_path().'/img/'.$portfolio->img;
                if(is_file($path)){
                    unlink($path);
                }
            }
            $portfolio->delete();
            return redirect()->route('portfolio')->with('status',env('PORTFOLIO_DELETE'));
        }
        if($request->isMethod('post')){
            $input= $request->except('_token');

            $validation = Validator::make($input,[
                'name'=>'required|max:100',
                'link'=>'required|max:200',
                'old_img'=>'required'
            ]);

            if($validation->fails()){
                return redirect()->route('portfolioEdit',['portfolio'=>$portfolio->id])->withErrors($validation)->withInput();
            }
            if($request->hasFile('img')){
                $pathFile =public_path().'/img/'.$portfolio->img;
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
            $portfolio->fill($input);
            if ($portfolio->update()){
                return redirect()->route('portfolio')->with('status',env('PORTFOLIO_UPDATE'));
            }
        }
        if (view()->exists('admin.portfolio_edit')){
            $old=$portfolio->toArray();
            $filters=Filter::all();
            $data=[
                'title'=>'Admin-PortfolioEditController',
                'portfolio'=>$old,
                'filters'=>$filters
            ];
            return view('admin.portfolio_edit',$data);
        }
        abort(404);
    }
}
