<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Aboutcontroller extends Controller
{
    //
    public function index(){
        $abouttext = DB::select('SELECT * FROM aboutme WHERE text is not null ');
        $about = DB::table('aboutme')->select('*')->whereNull('text')->get();
        $aboutme = About::all();
        $data = ['title'=>'About Me','aboutme'=>$aboutme,'about'=>$about,'abouttext'=>$abouttext];
        return view('admin.aboutme',$data);
    }
}
