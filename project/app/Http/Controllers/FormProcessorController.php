<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessorController extends Controller
{
    //
    public function index(){
        return view('registrationForm');
    }

    public function store(Request $request){
        $userData = ['Name'=> $request->name, 'Family'=>$request->family, 'e-mail'=>$request->email];

        return view('output',['info' => $userData ]);
    }
}
