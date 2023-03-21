<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrasiController;

//home
Route::get("/", [HomeController::class,'home']);
Route::get("/tentang-darah", [HomeController::class,'tentang_darah']);
Route::get("/agenda-donor", [HomeController::class,'agenda_donor']);
Route::get("/stok-darah", [HomeController::class,'stok_darah']);
// Route::get("/registrasi", [HomeController::class, 'registrasi']);

// Registrasi
Route::get("/registrasi" , [RegistrasiController::class, 'index']);
Route::post("/registrasi/registrasi_add" ,[RegistrasiController::class , 'registrasi_add']);