<?php

namespace App\Http\Controllers\Admin;

use App\Models\BerkasModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LolosBerkasController extends Controller
{
    public function index(Request $request){

        $data = $request->id;
        dd($data);

    }

    public function show($id){

       return view('admin.mahasiswa_calon.detail_calon');
    }

    public function update($id){
        $calons = BerkasModel::all();
        $no  =1;
        $siswa = BerkasModel::findOrFail($id);
        $siswa->status = 'Lolos';
        $siswa->save();

        session()->flash("success", "Calon mahasiswa berhasil diaktifkan.");
        return view('admin.mahasiswa_calon.index', compact('calons', 'no'));
     }


}
