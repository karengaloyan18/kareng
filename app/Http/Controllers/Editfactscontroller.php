<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Editfactscontroller extends Controller
{
    //
    public function index(Fact $fact, Request $request){
        if ($request->isMethod('delete')){
            $fact->delete();
            return redirect()->route('facts')->with('status','The fact was deleted');
        }

        if ($request->isMethod('post')){
            $input = $request->except('_token');
            $rules = ['numbers'=>'required|regex:/[0-9]{1,77}/','name'=>'required|max:255'];
            $validate = Validator::make($input,$rules);
            if ($validate->fails()){
                return redirect()->route('editfact',['fact'=>$fact->id])->withErrors($validate)->withInput();
            }
            $fact->fill($input);

            if ($fact->save()){
                return redirect()->route('facts')->with('status','The fact was updated');
            }
        }
        $data = ['title'=>'Updating the fact','fact'=>$fact];
        return view('admin.editfacts',$data);
    }
}
