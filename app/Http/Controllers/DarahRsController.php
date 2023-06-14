<?php


namespace App\Http\Controllers;
use App\Models\BloodrsModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DarahRsController extends Controller
{
    public function index()
    {
        $title = 'Bloodrs';
        $slug = 'Bloodrs';
        $dataBloodrs = BloodrsModel::all();
        return view('bloodrs.Bloodrs', compact('title', 'slug', 'dataBloodrs'));
    }
    public function edit($id)
    {
        // dd($id);
        $title = 'Perbaharui Data Bloodsrs';
        $slug = 'Bloodrs';
        $dataBloodrs = BloodModel::all()->where('id', '=', $id)->first();
        // dd($dataBlood);
        return view('adminRs.update', compact('title', 'slug', 'dataBloodrs'));
    }
    public function update(Request $request, $id){
        $id = $request->jenis_darahrs;
        BloodrsModel::where('jenis_darahrs', $id)->update([
            'jenis_darah' => $request->jenis_darahrs,
            'a' => $request->a,
            'b' => $request->b,
            'ab' => $request->ab,
            'o' => $request->o
        ]);
        return redirect('app-admin/bloodrs');
    }
}