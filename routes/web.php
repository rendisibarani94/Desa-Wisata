<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('admins')->group(function () {
Route::get('', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
});


// Route::get('/hello', [App\Http\Controllers\HelloController::class, 'index'])->name('hello');
Route::get('/', [App\Http\Controllers\HelloController::class, 'index'])->name('home');

Route::get('profil', [App\Http\Controllers\ProfilController::class, 'index']);

Route::get('desa', [App\Http\Controllers\DesaController::class, 'index']);

Route::get('akomodasi/homestay', [App\Http\Controllers\AkomodasiController::class, 'viewHomestay']);
Route::get('akomodasi/kuliner', [App\Http\Controllers\AkomodasiController::class, 'viewKuliner']);
Route::get('akomodasi/kesehatan', [App\Http\Controllers\AkomodasiController::class, 'viewKesehatan']);
Route::get('akomodasi/bank', [App\Http\Controllers\AkomodasiController::class, 'viewBank']);
Route::get('akomodasi/ibadah', [App\Http\Controllers\AkomodasiController::class, 'viewIbadah']);

Route::get('desa/alam', [App\Http\Controllers\DesaController::class, 'viewAlam']);
Route::get('desa/buatan', [App\Http\Controllers\DesaController::class, 'viewBuatan']);
Route::get('desa/budaya', [App\Http\Controllers\DesaController::class, 'viewBudaya']);

Route::get('paket', [App\Http\Controllers\PaketController::class, 'index']);
Route::get('galeri', [App\Http\Controllers\GaleriController::class, 'index']);


Route::get('desa/alam/pantai1', [App\Http\Controllers\WisataAlamController::class, 'index']);

// Ratings
Route::post('createRatings', [App\Http\Controllers\RatingController::class, 'addRating1'])->name('rating1');