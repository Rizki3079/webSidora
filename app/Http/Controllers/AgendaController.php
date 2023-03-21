<?php

namespace App\Http\Controllers;

use App\Models\AgendaModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'agenda';
        $slug = 'agenda';
        $dataAgenda = AgendaModel::all();
        return view('admin.agenda', compact('title', 'slug', 'dataAgenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah data Agenda Donor';
        $slug = 'agenda';
        // return view('admin.createAgenda', $data);
        return view('admin.createAgenda', compact('title', 'slug'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = AgendaModel::insert([
            'tanggal' => $request->tanggal,
            'tempat' => $request->tempat,
            'target' => $request->target
        ]);
        if($result){
            return redirect('/app-admin/agenda');
        }else{
            return $this->create();
        }
    }
    public function destroy($id)
    {
        AgendaModel::where('id', $id)
        ->delete();
        return redirect('/app-admin/agenda');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($id)
    {
        $title = 'Edit data Agenda Donor';
        $slug = 'agenda';
        $dataAgenda = AgendaModel::where('id', $id)
        ->first();
        return view('admin.editAgenda', compact('title', 'slug', 'dataAgenda'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request)
    {
        $id = $request->id;
        AgendaModel::where('id', $id)->update([
            'tanggal' => $request->tanggal,
            'tempat' => $request->tempat,
            'target' => $request->target,
        ]);
        return redirect('app-admin/agenda');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    

    /**
     */
    // public function __construct() {
    // }
}
