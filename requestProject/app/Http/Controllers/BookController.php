<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function show(){
        return view("book-form");
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => ['required', 'unique:books,title', 'between:2,255'],
            'author' =>  ['required', 'between:2,100'],   
            'genre' => ['required']
        ]);
        $book = Book::create($validated);
        $book -> save();
        return response()->json('Book is succesfully validated and data has been saved');
    }
}
