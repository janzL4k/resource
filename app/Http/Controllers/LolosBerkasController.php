<?php

namespace App\Http\Controllers;

use App\Models\BerkasModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LolosBerkasController extends Controller
{
    public function index(Request $request){

        $data = $request->id;
        dd($data);

        // $pdfdata = \DB::table('importpdfs')->get();

        // return view('showrecord', compact('data', 'pdfdata '));
        // $detail_berkas = BerkasModel::findOrFail($id);
        // $lolos= 'Lolos';
        // return view('admin.mahasiswa_calon.index', compact('lolos', 'detail_berkas'));
    }

    public function show(){

       return view('admin.mahasiswa_calon.detail_calon');
    }

    public function update($id){
        $mahasiswa_calon = BerkasModel::all();
        $no  =1;
        $siswa = BerkasModel::findOrFail($id);
        // $siswa->approved_by = Auth::user()->id;
        $siswa->status = 'Lolos';
        $siswa->save();
        // session()->flash("success", "Calon mahasiswa berhasil diaktifkan.");
        // return redirect()->route("master.mahasiswa.calon.index");
        return view('admin.mahasiswa_calon.index', compact('mahasiswa_calon', 'no'));
     }

     
}
