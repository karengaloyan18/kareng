<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class Factscontroller extends Controller
{
    //
    public function index(){
        $facts = Fact::all();
        $data = ['title'=>'Facts','facts'=>$facts];
        return view('admin.facts',$data);
    }
}
