<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index(){
        $paket = DB::select('CALL viewAllPaket()');
        $data['paket'] = array_map(function($item) {
            return (array) $item;
        }, $paket);
        return view('user.paket.index', $data);
    }

    public function detailsPaket($id){
        $paket = DB::select('CALL viewAllPaketById(?)', [$id]);

    $data['paket'] = $paket;

        return view('user.paket.details', $data);
    }

    public function addPaket(){
        return view('admin.paket_wisata.addPaket');
    }

    public function createPaket(Request $request){
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'partisipan' => 'required',
            'isPenginapan' => 'required',
            'isMakanan' => 'required',
            'isTransport' => 'required',
            'lama_kegiatan' => 'required',
            'contact_person' => 'required',
            'deskripsi_tambahan' => 'required'
        ]);
    
        $nama = $request->input('nama');
        $deskripsi = $request->input('deskripsi');
        $partisipan = $request->input('partisipan');
        $isPenginapan = $request->has('isPenginapan') ? 1 : 0;
        $isMakanan = $request->has('isMakanan') ? 1 : 0;
        $isTransport = $request->has('isTransport') ? 1 : 0;
        $lama_kegiatan = $request->input('lama_kegiatan');
        $contact_person = $request->input('contact_person');
        $deskripsi_tambahan = $request->input('deskripsi_tambahan');
    
        $paket = DB::select('CALL insertPaket(?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            $nama,
            $deskripsi,
            $partisipan,
            $isPenginapan,
            $isMakanan,
            $isTransport,
            $lama_kegiatan,
            $contact_person,
            $deskripsi_tambahan
        ]);
        
        if (!empty($paket)) {
            return redirect()->route('addPaket')->with('error', 'Gagal menambahkan data.');
        } else {
            return redirect()->route('addPaket')->with('success', 'Data berhasil ditambahkan!');
        }
    }
}
