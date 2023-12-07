<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function index(){
        return view('user.wisata.desa.index');
    }

    public function viewAlam(){
        return view('user.wisata.alam.index');
    }
    public function viewBuatan(){
        return view('user.wisata.buatan.index');
    }
    public function viewBudaya(){
        return view('user.wisata.budaya.index');
    }
}
