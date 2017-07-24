<?php
/**
 * Created by PhpStorm.
 * User: Станислав
 * Date: 17.07.17
 * Time: 22:24
 */

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class ClientEditController extends Controller
{

    public function execute(Client $client,Request $request){
        if($request->isMethod('delete')){
            if(env('DELETE_IMAGE')){
                $path = public_path().'/img/'.$client->icon;
                if(is_file($path)){
                    unlink($path);
                }
            }
            $client->delete();
            return redirect()->route('client')->with('status', env('CLIENT_DELETE'));
        }
        if($request->isMethod('post')) {
            $input = $request->except('_token');

            $validator = Validator::make($input, [
                'link' => 'max:200',
                'alias' => 'required|max:100',
            ]);
            if ($validator->fails()) {
                return redirect()->route('clientEdit', ['client' => $input['id']])->withErrors($validator);
            }
            if ($request->hasFile('icon')) {
                $file = $request->file('icon');
                $input['icon'] = $input['alias'] . '_' . $file->getClientOriginalName();
                $old_file = public_path() . '\img\\' . $input['old_icon'];
                $f = is_file($old_file);
                if ($f) {
                    unlink($old_file);
                }
                $file->move(public_path() . '/img', $input['icon']);
            } else {
                $input['icon'] = $input['old_icon'];
            }
            unset($input['old_icon']);
            $client->fill($input);
            if ($client->update()) {
                return redirect()->route('client')->with('status', env('CLIENT_UPDATE'));
            }
        }
        $old =$client->toArray();
        if(view()->exists('admin.client_edit')){
            $data=[
                'title'=>'Edit page-'.$old['alias'],
                'client'=>$client
            ];
            return view('admin.client_edit',$data);
        }
        abort(404);
    }

}