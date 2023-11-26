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


Route::get('/hello', [App\Http\Controllers\HelloController::class, 'index'])->name('hello');
Route::get('/', [App\Http\Controllers\HelloController::class, 'index2'])->name('home');
Route::get('profil', [App\Http\Controllers\HelloController::class, 'index3'])->name('profil');

