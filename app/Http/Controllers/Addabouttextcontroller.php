<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Addabouttextcontroller extends Controller
{
    //
    public function  index(Request $request){
    if ($request->isMethod('post')){
                $input = $request->except('_token');
                $rules = ['text'=>'required'];
                $validate = Validator::make($input,$rules);
                if ($validate->fails()){
                    return redirect()->route('addabouttext')->withErrors($validate)->withInput();
                }
                $about = new About();
//                dd($input);
                $about->fill($input);
                if ($about->save()){
                    return redirect()->route('about')->with('status','New info was added');
                }
            }

            $data = ['title'=>'Add a new text in About page'];
            return view('admin.addabouttext',$data);
}
}
