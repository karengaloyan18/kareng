<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class Servicecontroller extends Controller
{
    //
    public function index(){

        $services = Service::all();
        $data = ['title'=>'Services','services'=>$services];
        return view('admin.service',$data);
    }
}
