<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MainController extends Controller
{
    public function home(){
        $users = User::all();
        return view('welcome',[
            'users' => $users,
        ]);
    }
}
