<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $title = 'profile';
        $slug = 'profile';
        $dataprofile = User::all();
        return view('admin.profile', compact('title', 'slug', 'dataprofile'));
    }
}
