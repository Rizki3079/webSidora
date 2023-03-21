<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function tentang_darah()
    {
        return view('home.tentangdarah');
    }

    public function agenda_donor()
    {
        return view('home.agendadonor');
    }

    public function stok_darah()
    {
        return view('home.stokdarah');
    }
}
