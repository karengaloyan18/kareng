<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Addworkcontroller extends Controller
{
    //
    public function index(Request $request){
        if ($request->isMethod('post')){
            $input = $request->except('_token');
            $rules = ['image'=>'required'];
            $validate = Validator::make($input,$rules);
            if ($validate->fails()){
                return redirect()->route('addwork')->withErrors($validate)->withInput();
            }
            $file = $request->file('image');
            $input['image'] = $file->getClientOriginalName();
            $file->move(public_path().'/assets/images',$input['image']);
            $works = new Work();
//            dd($input);
            $works->fill($input);

            if ($works->save()){
                return redirect()->route('work')->with('status','New section was added');
            }
        }
        $data = ['title'=>'Adding a new section into Work page'];
        return view('admin.addwork',$data);
    }
}
