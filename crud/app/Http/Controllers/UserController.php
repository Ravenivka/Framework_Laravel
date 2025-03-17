<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function home(){
        $users = User::all();        
        return view('showAll', ['users'=> $users]);
    }

    public function add(){
        return view('store');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name'=> ['required', 'between:2,50'],
            'email'=> ['required','email'],
            'surname'=> ['required','between:2,50']
            ]);
           

            $user = User::create($validated);
            $user -> save();
            return view('success');
    }
    public function show($id){
        $user = User::find($id);        
        return view('show', ['user'=> $user]);
    }
    
}
