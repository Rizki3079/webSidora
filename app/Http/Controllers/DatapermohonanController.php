<?php

namespace App\Http\Controllers;

use App\Models\DataPermohonan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DatapermohonanController extends Controller
{
    public function index() {
        $title = 'Data Permohonan';
        $slug = 'datapermohonan';
        $datapermohonan = DataPermohonan::all();
        return view('admin.datapermohonan', compact('title', 'slug', 'datapermohonan'));
    }

    public function create()
    {
        $title = 'Tambah Data Permohonan';
        $slug = 'datapermohonan';
        // $datapengiriman = DataPengiriman::where('id', $id)->first();
        return view('admin.createPermohonan', compact('title', 'slug'));
    }

    public function edit($id) {
        $title = 'Perbarui Status Permohonan';
        $slug = 'datapermohonan';
        $datapermohonan = DataPermohonan::where('id', $id)->first();
        return view('admin.editPermohonan', compact('title', 'slug', 'datapermohonan'));
    }

    public function update(Request $request) {
        $id = $request->id;
        DataPermohonan::where('id', $id)->update([
            // 'nip' => $request->nip,
            'nama_instansi' => $request->nama_instansi,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'jumlah_kantong' => $request->jumlah_kantong,
            // 'dokumen' => $request->dokumen,
            'status' => $request->status
        ]);
        return redirect('app-admin/datapermohonan');

        
    }

    public function store(Request $request)
    {
        // try {
        //     DB::beginTransaction();
                $result = DataPermohonan::insert([
                'id' => $request->id,
                'nama_instansi' => $request->nama_instansi,
                'tanggal_pengajuan' => $request->tanggal_pengajuan,
                'jumlah_kantong' => $request->jumlah_kantong,
                // 'dokumen' => $request->dokumen,
                'status' => $request->status
            ]);
            if($result){
                return redirect('/app-admin/datapermohonan');
            }else{
                return $this->create();
            }
        }
}

