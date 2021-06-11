<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function profile(){
        return view('profile');
    }
    public function tickets(){
        return view('tickets');
    }
    public function clients(){
        return view('conf.clients');
    }
    public function users(){
        return view('conf.users');  
    }
}
