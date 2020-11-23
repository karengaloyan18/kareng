<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class Workcontroller extends Controller
{
    //
    public function index(){
            $works = Work::all();
            $data = ['title'=>'Works','works'=>$works];
            return view('admin.work',$data);
        }
}
