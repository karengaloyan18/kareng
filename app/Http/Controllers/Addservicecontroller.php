<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Addservicecontroller extends Controller
{
    //
    public function index(Request $request){
        if ($request->isMethod('post')){
            $input = $request->except('_token');
            $rules = ['name'=>'required|regex:/^[A-Z]{3,33}$/',
                    'text'=>'required',
                    'icon'=>'required|regex:/^icon-[a-z]{2,13}$/'];
            $validate = Validator::make($input,$rules);
            if ($validate->fails()){
                return redirect()->route('addservice')->withErrors($validate)->withInput();
            }
            $service = new Service();
            $service->fill($input);

            if ($service->save()){
                return redirect()->route('service')->with('status','New service is added');
            }
//            dump($input);
        }

        $data = ['title'=>'Adding a new service'];
        return view('admin.addservice',$data);
    }
}
