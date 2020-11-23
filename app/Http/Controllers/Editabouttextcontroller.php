<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Editabouttextcontroller extends Controller
{
    //
    public function index(About $text, Request $request){
        if ($request->isMethod('delete')){
            $text->delete();
            return redirect()->route('about')->with('status','The page was deleted');
        }

        if ($request->isMethod('post')){
            $req = $request->except('_token');
            $rules = ['text'=>'required'];
            $validate = Validator::make($req,$rules);
            if ($validate->fails()){
                return redirect()->route('addabouttext')->withErrors($validate)->withInput();
            }
//                dd($req);
            $text->fill($req);
            if ($text->save()){
                return redirect()->route('about')->with('status','Info for the page was updated');
            }
        }
        $data = ['title'=>'Abouts page updating','about'=>$text];
        return view('admin.editabouttext',$data);
    }
}
