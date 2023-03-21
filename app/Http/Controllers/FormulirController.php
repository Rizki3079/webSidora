<?php

namespace App\Http\Controllers;



use App\Http\Controllers\Controller;
use App\Models\FormulirModel;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class FormulirController extends Controller
{
    public function index($id)
    {
        $agenda = DB::table('agenda')->where('id', $id)->first();

        $title = 'Formulir';
        $slug = 'Formulir';
        $dataForm = FormulirModel::all();
        return view('Formulir', compact('title', 'slug', 'dataForm', 'agenda'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

        public function show()
    {

        return view('formulir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = FormulirModel::insert([
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

            'user_id' => auth()->user()->id,
            'tgl_donor' => $request->tgl_donor
        ]);
        if($result){
            return redirect('/app-admin/agenda');

        }else{
            return $this->create();
        }
    }

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
//     public function show($id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
// 
}
