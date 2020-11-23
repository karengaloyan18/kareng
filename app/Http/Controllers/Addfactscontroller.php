<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Addfactscontroller extends Controller
{
    //
    public function index(Request $request){
        if ($request->isMethod('post')){
            $input = $request->except('_token');
            $rules = ['numbers'=>'required|regex:/[0-9]{1,77}/','name'=>'required|alpha'];
            $validate = Validator::make($input,$rules);
            if ($validate->fails()){
                return redirect()->route('addfact')->withErrors($validate)->withInput();
            }
            $facts = new Fact();
            $facts->fill($input);

            if ($facts->save()){
                return redirect()->route('facts')->with('status','New fact was added');
            }
        }
        $data = ['title'=>'Adding a new fact'];
        return view('admin.addfacts',$data);
    }
}
