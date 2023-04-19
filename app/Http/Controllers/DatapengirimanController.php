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

    public function create()
    {
        $title = 'Tambah Data Pengiriman';
        $slug = 'datapengiriman';
        return view('admin.createPengiriman', compact('title', 'slug'));
    }

    public function store(Request $request)
    {
        $result = DataPengiriman::insert([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'dokumen' => $request->dokumen,
            'status' => $request->status
        ]);
        if($result){
            return redirect('/app-admin/datapengiriman');
        }else{
            return $this->create();
        }
    }
}

