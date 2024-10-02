<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tesController extends Controller
{
    public function kjiik(){
        return view('auth.login');
    }
}
