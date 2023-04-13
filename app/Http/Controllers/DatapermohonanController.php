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

    public function edit($id) {
        $title = 'Perbarui Status Permohonan';
        $slug = 'datapermohonan';
        $datapermohonan = DataPermohonan::all()->where('nip', '=', $id)->first();
        return view('admin.editPermohonan', compact('title', 'slug', 'datapermohonan'));
    }

    public function update(Request $request, $id){
        $id = $request->nip;
        DataPermohonan::where('nip', $id)->update([
            'nip' => $request->nip,
            'nama_instansi' => $request->nama_instansi,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
            'jumlah_kantong' => $request->jumlah_kantong,
            'dokumen' => $request->dokumen,
            'status' => $request->status
        ]);
        return redirect('app-admin/datapermohonan');
    }
}
