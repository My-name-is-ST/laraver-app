<?php

namespace App\Http\Controllers\Admin;

use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filter;
use Validator;
class PortfolioAddController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('post')){
            $input =$request->except('_token');
            $validator = Validator::make($input,[
                'name'=>'required|max:100',
                'link'=>'required|max:200',
                'img'=>'required'
            ]);
            if($validator->fails()|| (!$request->hasFile('img'))){
                return redirect()->route('portfolioAdd')->withErrors($validator)->withInput();
            }
            $file=$request->file('img');
            $input['img']=$input['name']."_".$file->getClientOriginalName();
            $file->move(public_path().'/img',$input['img']);
            $portfolio= new Portfolio();
            $portfolio->fill($input);
            if($portfolio->save()){
                return redirect()->route('portfolio')->with('status',env('PORTFOLIO_CREATED'));
            }

        }        if(view()->exists('admin.portfolio_add')){
            $filter=Filter::all();
            $data=[
                'title'=>'CREATE_PORTFOLIO',
                'filters'=>$filter
            ];
            return view('admin.portfolio_add',$data);
        }
        abort(404);
    }
}
