<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // public function index(){
    //     return view('layout.bluePrint');
    // }
    public function index(){
        return view('user.home.index');
    }
}
