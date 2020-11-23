<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Editservicecontroller extends Controller
{
    //
    public function index(Service $service, Request $request){

        if ($request->isMethod('delete')){
            $service->delete();
            return redirect()->route('service')->with('status','The service was deleted');
        }


        if($request->isMethod('post')){
            $input = $request->except('_token');
            $rules = ['name'=>'required|regex:/^[A-Z]{3,33}$/',
                'text'=>'required',
                'icon'=>'required|regex:/^icon-[a-z]{2,13}$/'];
            $validate = Validator::make($input,$rules);
            if ($validate->fails()){
                return redirect()->route('editservice',['service'=>$service->id])->withErrors($validate)->withInput();
            }
//            $service = new Service();
            $service->fill($input);

            if ($service->save()){
                return redirect()->route('service')->with('status','The service was updated');
            }
//            dump($input);
        }

        $data = ['title'=>'Service updating','service'=>$service];
        return view('admin.editservice',$data);
    }
}
