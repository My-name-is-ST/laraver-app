<?php
/**
 * Created by PhpStorm.
 * User: Станислав
 * Date: 15.07.17
 * Time: 23:10
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Filter;
use Illuminate\Support\Facades\Request;

class PortfolioController extends Controller
{
    public function execute(){

        if(view()->exists('admin.portfolio')){
            $portfolios=Portfolio::all();
            $data=[
              'title'=>'Admin-PortfolioController',
                'portfolios'=>$portfolios,
            ];
            return view('admin.portfolio',$data);
        }
        abort(404);
    }
}