<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RatingController extends Controller
{
    public function addRating1(Request $request){
        $request->validate([
            'rating' => 'required',
            'komen' => 'required'
        ]);
        $rating = $request->input('rating');
        $komen = $request->input('komen');
        $wisata = 1;

        $ratings = DB::select('CALL insertRatings(?,?,?)',[$wisata, $rating, $komen]);
        
        if($ratings != null){
            return redirect()->route('home');
        }else{
            return redirect()->route('pantai1');
        }
    }
}
