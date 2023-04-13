<?php

namespace App\Http\Controllers;

use App\Models\DataPengiriman;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatapengirimanController extends Controller
{
    public function index() {
        $title = 'Data Pengiriman';
        $slug = 'datapengiriman';
        $datapengiriman = DataPengiriman::all();
        return view('admin.datapengiriman', compact('title', 'slug', 'datapengiriman'));
    }
}
