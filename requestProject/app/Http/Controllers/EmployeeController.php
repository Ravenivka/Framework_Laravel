<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view("form");
    }
    public function store(Request $request){

        $array = $request->collect();
        $string = $request->input('adress');
        $string = trim($string, '{}" "');
        $json = explode(',', $string);
        for ($i=0; $i < count($json); $i++){
            $json[$i] = trim( str_replace(['"City":', '"Street":', '"'],'', $json[$i]));
        }
        echo "Name".' '.$array['username'].'<br>';
        echo "Family".' '.$array['family'].'<br>';
        echo "e-mail".' '.$array['email'].'<br>';
        echo "Department".' '.$array['department'].'<br>';
        echo "Post".' '.$array['role'].'<br>';
        
        
        
        echo "Город".' '.$json[0].'<br>';
        echo "Улица".' '.$json[1].'<br>';
        //echo "Дом".' '.$adress['House'].'<br>';
        //echo "Квартира".' '.$adress['Appartment'].'<br>';
    } 
    public function getPath(Request $X){
        return $X->path().'<br>';
    }    
    public function getUrl(Request $Y){
        return $Y->url().'<br>';
    }

    public function update(Request $request, $id){
        echo $this->getPath($request);
        echo $this->getUrl($request);
        echo $id;
    }


}
