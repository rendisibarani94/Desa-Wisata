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


Route::get('galeri', [App\Http\Controllers\GaleriController::class, 'indexAdmin'])->name('admin.galeri');
Route::get('addGaleri', [App\Http\Controllers\GaleriController::class, 'addGaleri'])->name('addGaleri');
Route::post('createGaleri', [App\Http\Controllers\GaleriController::class, 'createGaleri'])->name('createGaleri');
Route::post('deleteGaleri', [App\Http\Controllers\GaleriController::class, 'deleteGaleri'])->name('deleteGaleri');

Route::get('Linimasa', [App\Http\Controllers\LinimasaController::class, 'indexAdmin'])->name('admin.linimasa');
Route::get('addLinimasa', [App\Http\Controllers\LinimasaController::class, 'addLinimasa'])->name('addLinimasa');
Route::post('createLinimasa', [App\Http\Controllers\LinimasaController::class, 'createLinimasa'])->name('createLinimasa');
Route::get('deleteLinimasa/{id}', [App\Http\Controllers\LinimasaController::class, 'deleteLinimasa'])->name('deleteLinimasa');

Route::get('addPaket', [App\Http\Controllers\PaketController::class, 'addPaket'])->name('addPaket');
Route::post('createPaket', [App\Http\Controllers\PaketController::class, 'createPaket'])->name('createPaket');


});


// Route::get('/hello', [App\Http\Controllers\HelloController::class, 'index'])->name('hello');
Route::get('/', [App\Http\Controllers\HelloController::class, 'index'])->name('home');

Route::get('profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil');

Route::get('desa', [App\Http\Controllers\DesaController::class, 'index'])->name('wisataDesa');

Route::get('akomodasi/homestay', [App\Http\Controllers\AkomodasiController::class, 'viewHomestay']);
Route::get('akomodasi/kuliner', [App\Http\Controllers\AkomodasiController::class, 'viewKuliner']);
Route::get('akomodasi/kesehatan', [App\Http\Controllers\AkomodasiController::class, 'viewKesehatan']);
Route::get('akomodasi/bank', [App\Http\Controllers\AkomodasiController::class, 'viewBank']);
Route::get('akomodasi/ibadah', [App\Http\Controllers\AkomodasiController::class, 'viewIbadah']);

Route::get('desa/alam', [App\Http\Controllers\DesaController::class, 'viewAlam'])->name('wisataAlam');
Route::get('desa/buatan', [App\Http\Controllers\DesaController::class, 'viewBuatan'])->name('wisataBuatan');
Route::get('desa/budaya', [App\Http\Controllers\DesaController::class, 'viewBudaya'])->name('wisataBudaya');

Route::get('paket', [App\Http\Controllers\PaketController::class, 'index'])->name('paketWisata');
Route::get('paket/details/{id}', [App\Http\Controllers\PaketController::class, 'detailsPaket'])->name('details.paketWisata');

Route::get('galeris', [App\Http\Controllers\GaleriController::class, 'index'])->name('galeri');

Route::get('timeline', [App\Http\Controllers\LinimasaController::class, 'index'])->name('user.linimasa');
Route::get('timeline/{id}', [App\Http\Controllers\LinimasaController::class, 'article'])->name('user.article');


Route::get('desa/alam/pantai1', [App\Http\Controllers\WisataAlamController::class, 'index'])->name('pantai1');

// Ratings
Route::post('createRatings', [App\Http\Controllers\RatingController::class, 'addRating1'])->name('rating1');