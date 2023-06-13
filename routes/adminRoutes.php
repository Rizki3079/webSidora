<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DarahController;
use App\Http\Controllers\agendaController;
use App\Http\Controllers\stokController;
use App\Http\Controllers\DatapermohonanController;
use App\Http\Controllers\DatapengirimanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfileController;


Route::get("/login", [AdminController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('proccess-login');

//login
Route::group(['middleware' => ['role:adminRs|adminPmi|userPendonor']], function () {
    Route::get("/app-admin/create-admin", [AdminController::class, 'create_admin']);
    Route::post("/app-admin/process-login", [AdminController::class, 'process_login']);
    Route::get("/app-admin/dashboard", [AdminController::class, 'dashboard']);
    Route::get("/app-admin/blood", [AdminController::class, 'blood']);
    Route::get("/app-admin/agenda", [AdminController::class, 'agenda']);
    Route::get("/app-admin/riwayat", [AdminController::class, 'riwayat']);
    Route::get("/app-admin/edit/{id}", [DarahController::class, 'edit']);
    Route::post("/app-admin/update/{id}", [DarahController::class, 'update']);
    Route::post("/app-admin/agenda/store", [AgendaController::class, 'store']);
    Route::get("/app-admin/agenda/edit/{id}", [AgendaController::class, 'edit']);
    Route::post("/app-admin/agenda/update", [AgendaController::class, 'update']);
    Route::get("/app-admin/agenda/create", [AgendaController::class, 'create']);
    Route::get("/app-admin/agenda/destroy/{id}", [AgendaController::class, 'destroy']);
  
});


//logout
    Route::get("/logout", [AuthController::class, 'logout']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//dashboard

Route::get("/app-admin/datapermohonan", [DatapermohonanController::class, 'index']);
Route::get("/app-admin/datapermohonan/edit/{id}", [DatapermohonanController::class, 'edit']);
Route::post("/app-admin/datapermohonan/update/{id}", [DatapermohonanController::class, 'update']);

Route::get("/app-admin/datapengiriman", [DatapengirimanController::class, 'index']);
Route::get("/app-admin/datapengiriman/create", [DatapengirimanController::class, 'create']);
Route::post("/app-admin/datapengiriman/store", [DatapengirimanController::class, 'store']);
Route::get("/app-admin/datapengiriman/edit/{id}", [DatapengirimanController::class, 'edit']);

Route::get("/app-admin/pengguna", [PenggunaController::class, 'index']);

Route::get("/app-admin/profile", [ProfileController::class, 'index']);
