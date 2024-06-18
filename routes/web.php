<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\DashboardController::class,'index'])->name('dashboard')->middleware('auth');

Route::get('register', [\App\Http\Controllers\RegisterController::class,'create'])->name('register')->middleware('guest');
Route::post('register', [\App\Http\Controllers\RegisterController::class,'store']);
 
Route::get('login', [\App\Http\Controllers\LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('login', [\App\Http\Controllers\LoginController::class,'authenticate']);

Route::post('logout', [\App\Http\Controllers\LoginController::class,'logout']);
Route::get('logout', [\App\Http\Controllers\LoginController::class,'logout']);

Route::resource('/barang', \App\Http\Controllers\BarangController::class)->middleware('auth');
Route::resource('/kategori', \App\Http\Controllers\KategoriController::class)->middleware('auth');
Route::resource('/barangmasuk', \App\Http\Controllers\BarangMasukController::class)->middleware('auth');
Route::resource('/barangkeluar', \App\Http\Controllers\BarangKeluarController::class)->middleware('auth');