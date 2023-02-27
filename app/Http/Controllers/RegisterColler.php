<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterColler extends Controller
{
    //
    public function  create(){
        return view('register.create');
    }
}
