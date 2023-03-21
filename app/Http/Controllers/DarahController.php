<?php


namespace App\Http\Controllers;
use App\Models\BloodModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DarahController extends Controller
{
    public function index()
    {
        $title = 'Blood';
        $slug = 'Blood';
        $dataBlood = BloodModel::all();
        return view('blood.Blood', compact('title', 'slug', 'dataBlood'));
    }
    public function edit($id)
    {
        // dd($id);
        $title = 'Perbaharui Data Blood';
        $slug = 'Blood';
        $dataBlood = BloodModel::all()->where('id', '=', $id)->first();
        // dd($dataBlood);
        return view('admin.update', compact('title', 'slug', 'dataBlood'));
    }
    public function update(Request $request, $id){
        $id = $request->jenis_darah;
        BloodModel::where('jenis_darah', $id)->update([
            'jenis_darah' => $request->jenis_darah,
            'a' => $request->a,
            'b' => $request->b,
            'ab' => $request->ab,
            'o' => $request->o
        ]);
        return redirect('app-admin/blood');
    }
}
