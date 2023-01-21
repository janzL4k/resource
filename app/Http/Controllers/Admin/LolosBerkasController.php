<?php

namespace App\Http\Controllers\Admin;

use App\Models\BerkasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
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

        $title="Dashboard GenBi";
        $listCalon = BerkasModel::where('status', 'Di Review')->get();

        $siswa = BerkasModel::findOrFail($id);
        $siswa->status = 'Lolos';
        $siswa->save();

        $data = Collection::empty();
        $data->put('title',$title);
        $data->put('listCalon',$listCalon);

        session()->flash("success", "Mahasiswa Diluluskan.");
        return redirect()->route('mahasiswa_calon.index',
            [
                "data"=>$data,
            ]);
     }
}
