<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\AdminRsController;
// use App\Http\Controllers\DarahController;
// use App\Http\Controllers\agendaController;

// Route::get("/login", [AdminRsController::class, 'login'])->name('login')->middleware('guest');
// Route::post('/login', [AuthController::class, 'login'])->name('proccess-login');

//login
// Route::middleware('auth')->group(function(){
//     Route::get("/app-admin/create-admin", [AdminRsController::class, 'create_admin']);
//     Route::post("/app-admin/process-login", [AdminRsController::class, 'process_login']);
//     Route::get("/app-admin/dashboard", [AdminRsController::class, 'dashboard']);
//     Route::get("/app-admin/blood", [AdminRsController::class, 'blood']);
//     Route::get("/app-admin/agenda", [AdminRsController::class, 'agenda']);
//     Route::get("/app-admin/riwayat", [AdminRsController::class, 'riwayat']);
//     Route::get("/app-admin/edit/{id}", [DarahController::class, 'edit']);
//     Route::post("/app-admin/update/{id}", [DarahController::class, 'update']);
//     Route::post("/app-admin/agenda/store", [AgendaController::class, 'store']);
//     Route::get("/app-admin/agenda/edit/{id}", [AgendaController::class, 'edit']);
//     Route::post("/app-admin/agenda/update", [AgendaController::class, 'update']);
//     Route::get("/app-admin/agenda/create", [AgendaController::class, 'create']);
//     Route::get("/app-admin/agenda/destroy/{id}", [AgendaController::class, 'destroy']);
// });


//logout
    // Route::get("/logout", [AuthController::class, 'logout']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//dashboard