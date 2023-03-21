<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\PDFController;

// Route::get("/formulir", [FormulirController::class]);
// Route::get("/app-admin/formulir", [FormulirController::class,'show']);
Route::get("/app-admin/{id}/formulir", [FormulirController::class, 'index']);
Route::post("/app-admin/formulir/store", [FormulirController::class, 'store']);

Route::post('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
Route::get("/logout", [AuthController::class, 'logout']);
