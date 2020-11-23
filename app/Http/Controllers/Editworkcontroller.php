<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Editworkcontroller extends Controller
{
    //
    public function index(Work $work, Request $request){
        if ($request->isMethod('delete')){
            $work->delete();
            return redirect()->route('work')->with('status','The section was deleted');
        }

        if ($request->isMethod('post')){
            $input = $request->except('_token');
            $rules = ['image'=>'required'];
            $validate = Validator::make($input,$rules);
            if ($validate->fails()){
                return redirect()->route('editwork',['work'=>$work->id])->withErrors($validate)->withInput();
            }
            $file = $request->file('image');
            $input['image'] = $file->getClientOriginalName();
            $file->move(public_path().'/assets/images',$input['image']);
//            $works = new Work();
//            dd($input);
            $work->fill($input);

            if ($work->save()){
                return redirect()->route('work')->with('status','The section was updated');
            }
        }
        $data = ['title'=>'Updating '.$work->id .' section','work'=>$work];
        return view('admin.editwork',$data);
    }
}
