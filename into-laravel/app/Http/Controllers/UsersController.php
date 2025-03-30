<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    public function index(){
        Gate::authorize('view-any', User::class);
        //$this->authorize('view-any', User::class);
        $users = User::all();
        return $users;
    }
}
