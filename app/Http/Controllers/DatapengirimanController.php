<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPengiriman;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
        // $datapengiriman = DataPengiriman::where('id', $id)->first();
        return view('admin.createPengiriman', compact('title', 'slug'));
    }

    public function store(Request $request)
    {
        // try {
        //     DB::beginTransaction();
                $result = DataPengiriman::insert([
                // 'id' => $request->id,
                'nama_instansi' => $request->nama_instansi,
                'tanggal_pemrosesan' => $request->tanggal_pemrosesan,
                'jumlah_kantong' => $request->jumlah_kantong,
                // 'dokumen' => $request->dokumen,
                'status' => $request->status
            ]);
        //    
        // //     DB::commit();
        // // } catch (\Throwable $th) {
        // //     DB::rollback();
            
        // //     echo $th->getMessage();
        // }
       
        if($result){
            return redirect('/app-admin/datapengiriman');
        }else{
            return $this->create();
        }
    }
    
    public function edit($id)
    {
        $title = 'Edit Data Pengiriman';
        $slug = 'datapengiriman';
        $datapengiriman = DataPengiriman::where('id', $id)
        ->first();
        return view('admin.editPengiriman', compact('title', 'slug', 'datapengiriman'));
    }
    public function update(Request $request)
    {
        $id = $request->id;
        DataPengiriman::where('id', $id)->update([
            // 'nip' => $request->nip,
            'nama_instansi' => $request->nama_instansi,
            'tanggal_pemrosesan' => $request->tanggal_pemrosesan,
            'jumlah_kantong' => $request->jumlah_kantong,
            'status' => $request->status
        ]);
        return redirect('app-admin/datapengiriman');
    }


    public function destroy()
    {
        DataPengiriman::where('id', $id)
        ->delete();
        return redirect('/app-admin/datapengiriman');
    }

    
}

