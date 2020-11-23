<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Editaboutcontroller extends Controller
{
    //
    public function index(About $about, Request $request){
        if ($request->isMethod('delete')){
            $about->delete();
            return redirect()->route('about')->with('status','The page was deleted');
        }

        if ($request->isMethod('post')){
            $req = $request->except('_token');
            $rules = ['percentofknowledge'=>'required|regex:/[0-9][0-9][0-9]?/',
                'name'=>'required|regex:/^[A-Z]{2,77}$/'];
            $validate = Validator::make($req,$rules);
            if ($validate->fails()){
                return redirect()->route('editabout',['about'=>$about->id])->withErrors($validate)->withInput();
            }
//            dd($input);
            $about->fill($req);
//            dd($about);
            if ($about->save()){
                return redirect()->route('about')->with('status','Info for the page was updated');
            }
//            dump($input);
        }
        $data = ['title'=>'Abouts page updating','about'=>$about];
        return view('admin.editabout',$data);
    }
}
