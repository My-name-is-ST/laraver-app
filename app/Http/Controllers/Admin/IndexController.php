<?php

/**
 * Created by PhpStorm.
 * User: Станислав
 * Date: 15.07.17
 * Time: 18:50
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function execute(){

        return view('admin.index');
    }

}