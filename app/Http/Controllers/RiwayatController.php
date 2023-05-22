<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatModel;
use App\Http\Controllers\Controller;


class RiwayatController extends Controller

{
    public function index() {
    $title = 'riwayat';
    $slug = 'riwayat';
    $riwayat = RiwayatModel::all();
    return view('admin.riwayat', compact('title', 'slug', 'riwayat'));
    }
}
