<?php

namespace App\Http\Controllers;
use App\Models\StokModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class stokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Stok';
        $slug = 'stok';
        $dataStok = StokModel::all();
        return view('admin.stok', compact('title', 'slug', 'dataStok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah data Stok Darah';
        $slug = 'stok';
        // return view('admin.createAgenda', $data);
        return view('admin.stok', compact('title', 'slug'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = StokModel::insert([
            'jenis_darah' => $request->jenis_darah,
            'a' => $request->a,
            'b' => $request->b,
            'ab' => $request->ab,
            'o' => $request->o
        ]);
        if($result){
            return redirect('/app-admin/stok');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit data Stok Darah';
        $slug = 'stok';
        $dataStok = StokModel::where('id', $id)
        ->first();
        return view('admin.editStok', compact('title', 'slug', 'dataStok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = $request->id;
        StokModel::where('id', $id)->update([
            'jenis_darah' => $request->jenis_darah,
            'a' => $request->a,
            'b' => $request->b,
            'ab' => $request->ab,
            'o' => $request->o
        ]);
        return redirect('app-admin/stok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StokModel::where('id', $id)
        ->delete();
        return redirect('/app-admin/stok');
    }
}
