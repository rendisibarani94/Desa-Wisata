<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(){
        $galeri  = DB::select('CALL viewAllGaleri()');

        $data['galeri'] = array_map(function($item) {
            return (array) $item;
        }, $galeri);

        return view('user.galeri.index', $data);
    }
    public function indexAdmin(){
        $galeri  = DB::select('CALL viewAllGaleri()');
        
        $data['galeri'] = array_map(function($item) {
            return (array) $item;
        }, $galeri);
    
        return view('admin.galeri.index', $data);
    }

    public function addGaleri(){
        return view('admin.galeri.addGaleri');
    }

    public function createGaleri(Request $request){
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required',
            'tanggal' => 'required'
         ]);
     
         $gambar = $request->file('gambar');
         $judul = $request->input('judul');
         $tanggal = $request->input('tanggal');
     
         if($gambar){
             $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
             
             // Ensure the 'galeri' directory exists in the 'public' folder
             $galeriPath = public_path('galeri');
             if (!file_exists($galeriPath)) {
                 mkdir($galeriPath, 0755, true); // Create the directory if it doesn't exist
             }
     
             $gambar->move(public_path('galeri'), $gambarName); // Move the file to the 'galeri' directory
             
             // Assuming you want to store the file name in the database, adjust this part based on your database schema and Eloquent models
             $galeri = DB::select('CALL insertGaleri(?,?,?)',[$gambarName, $judul, $tanggal]);
     
             if($galeri != null){
                 return redirect()->route('addGaleri')->with('error', 'Gagal menambahkan data.');
             } else {
                 return redirect()->route('admin')->with('success', 'Data berhasil ditambahkan!');
             }
         }
         return redirect()->route('admin')->with('error', 'File gambar tidak ditemukan.');
    }


    public function deleteGaleri(Request $request){
        $id = $request->input('id_galeri');

        $delete = DB::select('CALL deleteGaleri(?)', [$id]);

        if($delete != null){
            return redirect()->route('admin.galeri')->with('error', 'Gagal menghapus data.');
        } else {
            return redirect()->route('admin.galeri')->with('success', 'Data berhasil dihapus!');
        }
    }

}
