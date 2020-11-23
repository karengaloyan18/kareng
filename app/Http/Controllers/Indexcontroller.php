<?php

namespace App\Http\Controllers;

//use App\Models\About;
use App\Mail\karengmail;
use App\Models\Fact;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Work;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class Indexcontroller extends Controller
{
    //
    public function index(Request $request){

        if ($request->isMethod('post')){
            $input = $request->except('_token');
          $validate = Validator::make($input,['name'=>'required|max:255|alpha',
                                    'email'=>'required|email',
                                    'textarea'=>'required']);
          if ($validate->fails()){
              return redirect()->route('index')->withErrors($validate)->withInput();
          }

            $details = ['title'=>'from ' . $request->name , 'body' => $request->textarea];
            $mail = Mail::to('ussant741@gmail.com')->send(new karengmail($details));
            if ($mail){
                return redirect()->route('index')->with('status','Message send');
            }
        }


        $services = Service::all();
        $abouttext = DB::select('SELECT * FROM aboutme WHERE text is not null ');
        $about = DB::table('aboutme')->select('*')->whereNull('text')->get();
        $facts = Fact::all();
        $works = Work::all();


    $menu = [];
    $item = ['alias'=>'HOME','title'=>'Home'];
    array_push($menu,$item);

        $item = ['alias'=>'SERVICE','title'=>'Service'];
        array_push($menu,$item);

            $item = ['alias'=>'ABOUT','title'=>'About'];
            array_push($menu,$item);

                $item = ['alias'=>'TESTIMONIAL','title'=>'testimonial'];
                array_push($menu,$item);

                    $item = ['alias'=>'WORK','title'=>'Work'];
                    array_push($menu,$item);

                        $item = ['alias'=>'CONTACT','title'=>'Contact'];
                        array_push($menu,$item);

        return view('site.index',['menu'=> $menu,'services'=>$services,'about'=>$about,'abouttext'=>$abouttext,'facts'=>$facts,'works'=>$works]);
    }
}
