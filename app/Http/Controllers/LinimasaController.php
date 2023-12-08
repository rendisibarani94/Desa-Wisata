<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LinimasaController extends Controller
{
    public function index(){
        $linimasa  = DB::select('CALL viewAllLinimasa()');

        $data['linimasa'] = array_map(function($item) {
            return (array) $item;
        }, $linimasa);

        return view('user.Linimasa.index', $data);
    }

    public function addLinimasa(){
        return view('admin.linimasa.addLinimasa');
    }

    public function article($id){
        $article = DB::select('CALL viewLinimasaById(?)', [$id]);

    $data['article'] = $article;

    return view('user.Linimasa.article', $data);
    }

    public function createLinimasa(Request $request){
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required',
            'deskripsi_gambar' => 'required',
            'deskripsi' => 'required'
         ]);
     
         $gambar = $request->file('gambar');
         $judul = $request->input('judul');
         $deskripsi_gambar = $request->input('deskripsi_gambar');
         $deskripsi = $request->input('deskripsi');
     
         if($gambar){
             $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
             
             // Ensure the 'galeri' directory exists in the 'public' folder
             $linimasaPath = public_path('linimasa');
             if (!file_exists($linimasaPath)) {
                 mkdir($linimasaPath, 0755, true); // Create the directory if it doesn't exist
             }
     
             $gambar->move(public_path('linimasa'), $gambarName); // Move the file to the 'galeri' directory
             
             // Assuming you want to store the file name in the database, adjust this part based on your database schema and Eloquent models
             $linimasa = DB::select('CALL insertLinimasa(?,?,?)',[$judul, $gambarName, $deskripsi_gambar, $deskripsi]);
     
             if($linimasa != null){
                 return redirect()->route('addLinimasa')->with('error', 'Gagal menambahkan data.');
             } else {
                 return redirect()->route('addLinimasa')->with('success', 'Data berhasil ditambahkan!');
             }
         }
         return redirect()->route('addLinimasa')->with('error', 'File gambar tidak ditemukan.');
    }

}
