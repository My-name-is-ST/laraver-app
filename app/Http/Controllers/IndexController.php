<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;
use App\Service;
use App\Team;
use App\Filter;
use App\Portfolio;
use App\User;
use Illuminate\Support\Facades\Mail;
use Mockery\Exception;

class IndexController extends Controller
{

    public function execute(Request $request){
        if($request->isMethod('post')){
            $this->validate($request,[
                'name'=>'required|max:100',
                'email'=>'required|email',
                'text'=>'required'
            ]);


            $data=$request->all();
            //send mail
            try {
                Mail::send('emails.email', ['data' => $data], function ($message) use ($data) {
                    $mail_admin = env('MAIL_ADMIN');
                    $mail_admin_name=env('MAIL_NAME_ADMIN');
                    $message->from($data['email'], $data['name']);
                    $message->to($mail_admin,$mail_admin_name)->subject('Question');

                });
            }catch (RuntimeException $e){
                //log($e->getMessage(),false);
             return redirect()->route('home')->with('statusError',env('STATUS_ERROR_SEND_MESSAGE'));
            }

            return redirect()->route('home')->with('status',env('STATUS_SEND_MESSAGE'));
        }
        $menu=[];
        $pages=null;    $teams=null;    $portfolios=null;   $filter=null;   $clients=null;
        try {
            $pages = Page::all();
            $portfolios = Portfolio::get(['name', 'img', 'filter_id', 'link']);
            $services = Service::get(['name', 'icon', 'text']);
            $teams = Team::all();
            $filter = Filter::all();
            $clients = Client::all();
            foreach ($pages as $page){
                $item=['title'=>$page->name,'alias'=>$page->alias];
                array_push($menu,$item);
            }
        }catch (QueryException $exception){
            logger($exception->getMessage(),$exception->getTrace());
            abort(404);
        }
        $item = ['title'=>'Services','alias'=>'service'];
        array_push($menu,$item);

        $item=['title'=>'Portfolio','alias'=>'Portfolio'];
        array_push($menu,$item);

        $item=['title'=>'clients','alias'=>'clients'];
        array_push($menu,$item);

        $item=['title'=>'Team','alias'=>'team'];
        array_push($menu,$item);

        $item=['title'=>'Contact','alias'=>'contact'];
        array_push($menu,$item);

        $data=['menu'=>$menu,
            'pages'=>$pages,
            'services'=> $services,
            'teams'=>$teams,
            'portfolios'=>$portfolios,
            'filters'=>$filter,
            'clients'=>$clients
        ];
        return  view('site.index',$data);
    }
}
