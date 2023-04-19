<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PenggunaController extends Controller
{
    public function index() {
        $title = 'pengguna';
        $slug = 'pengguna';
        $pengguna = User::all();
        return view('admin.pengguna', compact('title', 'slug', 'pengguna'));
    }
}
