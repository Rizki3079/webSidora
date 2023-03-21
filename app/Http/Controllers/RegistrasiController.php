<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AdminModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.registrasi');

    }

    public function registrasi_add(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'tanggal_lahir'=>'required',
            'email'=>'required|email|unique:users',
            'nik' =>'required|numeric',
            'password'=>'required|min:8',
            'password_confirmation'=>'required|min:8|same:password'
        ],
        [
            'name.required' => "Nama lengkap wajib diisi",
            'tanggal_lahir.required' => "Tanggal lahir wajib diisi",
            'email.required' => "Email wajid wajib diisi",
            'email.unique' => "Email sudah terdaftar",
            'email.email' => "format email yang digunakan tidak valid",
            'nik.required' => "NIK wajib diisi",
            'nik.numeric' => "harus diisi angka",
            'password.required' => "password wajib diisi",
            'password.min'=> "password minimal 8 karakter",
            'password_confirmation.required' => "password wajib diisi",
            'password_confirmation.same' => "Password yang diisi harus sesuai dengan sebelumnya"
        ]);

        $dataInput = [
            'name' => $request->input('name'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'email'=>$request->input('email'),
            'nik' => $request->input('nik'),
            'role' => 1,
            'password' => Hash::make($request->input('password'))
        ];

        User::create($dataInput);

        session()->flash('msg', "<strong>Registrasi Berhasil. </strong> <br> Silahkan login!");
        session()->flash('msg_status', 'success');

        return redirect('/login');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
