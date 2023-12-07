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
    public function index3(){
        return view('user.profil.index');
    }

    
    public function index7(){
        return view('user.wisata.desa.index');
    }
    public function index8(){
        return view('user.akomodasi.homestay');
    }
    public function index9(){
        return view('user.akomodasi.kuliner');
    }
    public function index10(){
        return view('user.akomodasi.kesehatan');
    }
    public function index11(){
        return view('user.akomodasi.bank');
    }
    public function index12(){
        return view('user.akomodasi.ibadah');
    }

    public function index13(){
        return view('user.paket.index');
    }
    public function index14(){
        return view('user.galeri.index');
    }

}
