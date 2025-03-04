<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RazorController extends Controller
{
    //
    public function home(){
        $arr = ['title' => 'Home', 'name' => 'Ivan Ivanoff', 'email' => 'qu@quru.za', 'age' => 15];
        return view('home', ['info' => $arr]);
    }

    public function contact(Request $request){
        
        $userData = ['title' => 'Hi, Ivanoff!', 'name' => 'Ivan Ivanoff', 'email' => ' ', 'age' => 15];

        return view('contacts',['info' => $userData ]);
    }
}
