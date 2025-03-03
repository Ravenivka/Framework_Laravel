<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test_database', function () {
    $emp = new Employee;
    $emp->info = 'new record';
    $emp->save();
    echo 'done';
});
