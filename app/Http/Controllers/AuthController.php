<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\PermissionModel;
use App\Models\RoleHasPermissionModel;
use App\Models\RoleModel;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            $user = Auth::user();
            
            if ($user->hasRole('adminRs')) {
                $user->syncRoles(['adminRs']);
                return redirect('/app-admin/dashboard');
            } elseif ($user->hasRole('adminPmi')) {
                $user->syncRoles(['adminPmi']);
                return redirect('/app-admin/dashboard');
            } elseif ($user->hasRole('userPendonor')) {
                $user->syncRoles(['userPendonor']);
                return redirect('/app-admin/dashboard');
            }  else {
                return redirect('/login');
            }
        }else {
            session()->flash('msg', "<strong>Maaf, login gagal.</strong> <br> Periksa kembali data login anda !");
            session()->flash('msg_status', 'danger');
            return back();
        }
    }

    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('')->with('success', 'Logout berhasil');
    }
}

