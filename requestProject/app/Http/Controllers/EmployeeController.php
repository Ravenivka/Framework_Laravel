<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view("form");
    }
    public function store(Request $request){
        $userName = $request->input("username");
        $family = $request->input("family");
        $email = $request->input("email");
        $department = $request->input("department");
        $role = $request->input("role");
        var_dump($role);
    }
}
