<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminRsModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminRsController extends Controller
{

    public function login()
    {

        return view('adminrs.login');

    }

    public function create_admin()
    {
        AdminRsModel::create([
            'name' => 'AdminRs',
            'phone' => '089661345329',
            'address' => 'Jl. Tembaga',
            'username' => 'adminrs',
            'password' => Hash::make('adminrs'),
            'active' => 1,
        ])->assignRole('adminrs');

        return redirect('app-adminrs');
    }

    public function process_login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $admin = AdminRsModel::where('username', $username)->first();
        
        if ($admin) {
            if($admin->active == 1){
                return redirect('app-adminrs/dashboard');
            } else {
                session()->flash('msg', "<strong>Maaf, login gagal.</strong> <br> Akun belum di aktivasi!");
                session()->flash('msg_status', 'danger');
                return back();
            }
        } else {
            session()->flash('msg', "<strong>Maaf, login gagal.</strong> <br> Periksa kembali data login anda !");
            session()->flash('msg_status', 'danger');
            return back();
        }
    }

    public function dashboard()
    {
        return view('adminrs.dashboard');
    }

    public function blood()
    {
        $bloods = DB::table('blood')->select([
                'id',
                'jenis_darah',
                'a',
                'b',
                'ab',
                'o'
            ])->get();
        $data = [
            'bloods' => $bloods
        ];
        return view('adminrs.blood', compact('bloods'));
    }
    
    public function agenda()
    {
        $agenda = DB::table('agenda')->select([
            'id',
            'tanggal',
            'tempat',
            'target',
        ])->get();
        $data = [
            'agenda' => $agenda
        ];
            
        return view('adminrs.agenda', $data );
    }
    public function riwayat()
    {

    if (auth()->user()->role == 1) {
            $Riwayat = DB::table('formulir')->where('user_id', auth()->user()->id)->get();
        } else {
            $Riwayat = DB::table('formulir')->get();
        }
        
        $data = [
            'riwayat' => $Riwayat
        ];
        return view('adminrs.riwayat', $data);


    }
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
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
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
