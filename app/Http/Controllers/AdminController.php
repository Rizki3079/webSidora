<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {

        return view('admin.login');

    }

    public function create_admin()
    {
        AdminModel::create([
            'name' => 'Admin',
            'phone' => '085973729267',
            'address' => 'Jl. Pahlawan',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'active' => 1,
        ])->assignRole('admin');

        return redirect('app-admin');
    }

    public function process_login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $admin = AdminModel::where('username', $username)->first();
        
        if ($admin) {
            if($admin->active == 1){
                return redirect('app-admin/dashboard');
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
        return view('admin.dashboard');
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
        return view('admin.blood', compact('bloods'));
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
            
        return view('admin.agenda', $data );
    }
    public function riwayat()
    {

    if (auth()->user()->role == 1) {
            $Riwayat = DB::table('formulirs')->where('user_id', auth()->user()->id)->get();
        } else {
            $Riwayat = DB::table('formulirs')->get();
        }
        
        $data = [
            'riwayat' => $Riwayat
        ];
        return view('admin.riwayat', $data);


    }
}