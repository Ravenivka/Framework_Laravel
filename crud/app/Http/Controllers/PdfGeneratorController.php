<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class PdfGeneratorController extends Controller
{
    public function save($id){
        $user = User::find($id);

            $pdf = PDF::loadView("resume", ['user'=> $user]);
            return $pdf->download("resume.pdf");
    }    
    public function view($id){
        $user = User::find($id);

            $pdf = PDF::loadView("resume", ['user'=> $user]);
            return $pdf->stream("resume.pdf");
    }
}
