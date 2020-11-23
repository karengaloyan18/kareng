<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Addaboutcontroller extends Controller
{
    //
    public function index(Request $request){
        if ($request->isMethod('post')){
            $input = $request->except('_token');
            $rules = ['percentofknowledge'=>'required|regex:/[0-9][0-9][0-9]?/',
                'name'=>'required|regex:/^[A-Z]{2,77}$/'];
            $validate = Validator::make($input,$rules);
            if ($validate->fails()){
                return redirect()->route('addabout')->withErrors($validate)->withInput();
            }
            $about = new About();
//            dd($input);
            $about->fill($input);
//            dd($about);
            if ($about->save()){
                return redirect()->route('about')->with('status','New info was added');
            }
//            dump($input);
        }

        $data = ['title'=>'Adding a new info into AboutMe page'];
        return view('admin.addaboutme',$data);
    }
}
