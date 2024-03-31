<?php

namespace App\Http\Controllers;
use Iluminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
        /*[
            "users"=> $users
        ]);*/
    }
}
