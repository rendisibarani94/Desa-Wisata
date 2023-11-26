<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return view('layout.bluePrint');
    }
    public function index2(){
        return view('user.home.index');
    }
    public function index3(){
        return view('user.profil.index');
    }
    public function index4(){
        return view('user.wisata.alam.index');
    }
}
