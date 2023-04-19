<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FormulirModel;
use Illuminate\Http\Request;
use PDF;


class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        if ($request->status_pernikahan == 1) {
            $status_pernikahan = 'Menikah';
        } else {
            $status_pernikahan = 'Belum Menikah';
        }
        $data = [
            'title' => 'Cetak Formulir Donor Darah',
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
            'pekerjaan' => $request->pekerjaan,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'kartu_Donor' => $request->kartu_Donor,
            'jk' => $request->jk,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'jenis_darah' => $request->jenis_darah,
            'tipe_darah' => $request->tipe_darah    ,
            'status_pernikahan' => $status_pernikahan,
        ];
             FormulirModel::insert([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
            'pekerjaan' => $request->pekerjaan,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'kartu_Donor' => $request->kartu_Donor,
            'jk' => $request->jk,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'jenis_darah' => $request->jenis_darah,
            'tipe_darah' => $request->tipe_darah,
            'status_pernikahan' => $request->status_pernikahan,
            // 'user_id' => auth()->user()->id,
            'tgl_donor' => $request->tgl_donor
        ]);

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('Sidora.pdf');
    }
}
