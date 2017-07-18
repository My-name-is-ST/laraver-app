<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
//users' part
Route::group([],function(){
    Route::get('/',['uses'=>'IndexController@execute','as'=>'home']);
    Route::post('/sendMail',['uses'=>'IndexController@execute','as'=>'sendMail']);
    Route::get('/page/{alias}',['uses'=>'PageController@execute','as'=>'page']);
    Route::auth();
});

//admin part
Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    //admin/
    Route::get('/','Admin\IndexController@execute')->name('adminHome');
    //admin/pages
    Route::group(['prefix'=>'pages'],function (){
        Route::get('/',['uses'=>'Admin\PageController@execute','as'=>'pages']);
        //admin/pages/add
        Route::match(['get','post'],'/add',['uses'=>'Admin\PageAddController@execute','as'=>'pagesAdd']);
        //admin/pages/edit
        Route::match(['get','post','delete'],'/edit/{page}',['uses'=>'Admin\PageEditController@execute','as'=>'pagesEdit']);
    });

    Route::group(['prefix'=>'portfolios'],function (){
        Route::get('/',['uses'=>'Admin\PortfolioController@execute','as'=>'portfolio']);
        //admin/portfolio/add
        Route::match(['get','post'],'/add',['uses'=>'Admin\PortfolioAddController@execute','as'=>'portfolioAdd']);
        //admin/portfolio/edit
        Route::match(['get','post','delete'],'/edit/{portfolio}',['uses'=>'Admin\PortfolioEditController@execute','as'=>'portfolioEdit']);
    });

    Route::group(['prefix'=>'services'],function (){
        Route::get('/',['uses'=>'Admin\ServiceController@execute','as'=>'service']);
        //admin/service/add
        Route::match(['get','post'],'/add',['uses'=>'Admin\ServiceAddController@execute','as'=>'serviceAdd']);
        //admin/service/edit
        Route::match(['get','post','delete'],'/edit/{service}',['uses'=>'Admin\ServiceEditController@execute','as'=>'serviceEdit']);
    });

    Route::group(['prefix'=>'team'],function (){
       Route::get('/',['uses'=>'Admin\TeamController@execute','as'=>'team']);
        //admin/team/add
        Route::match(['get','post'],'/add',['uses'=>'Admin\TeamAddController@execute','as'=>'teamAdd']);
        //admin/team/edit
        Route::match(['get','post','delete'],'/edit/{team}',['uses'=>'Admin\TeamEditController@execute','as'=>'teamEdit']);
    });

    Route::group(['prefix'=>'client'],function (){
        Route::get('/',['uses'=>'Admin\ClientController@execute','as'=>'client']);
        //admin/client/add
        Route::match(['get','post'],'/add',['uses'=>'Admin\ClientAddController@execute','as'=>'clientAdd']);
        //admin/client/edit
        Route::match(['get','post','delete'],'/edit/{client}',['uses'=>'Admin\ClientEditController@execute','as'=>'clientEdit']);
    });
});
Auth::routes();

