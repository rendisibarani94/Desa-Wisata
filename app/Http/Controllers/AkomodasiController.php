<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkomodasiController extends Controller
{
    public function viewHomestay(){
        return view('user.akomodasi.homestay');
    }
    public function viewKuliner(){
        return view('user.akomodasi.kuliner');
    }
    public function viewKesehatan(){
        return view('user.akomodasi.kesehatan');
    }
    public function viewBank(){
        return view('user.akomodasi.bank');
    }
    public function viewIbadah(){
        return view('user.akomodasi.ibadah');
    }
}
