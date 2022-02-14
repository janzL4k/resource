<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use App\Models\BerkasModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DatakampusController extends Controller
{
    public function index()
    {
        $results = Kampus::all();
        return view('/admin/data_kampus/index',compact('results'));
    }

    public function create()
    {
            return view('admin.data_kampus.create');
    }
    public function back()
    {
            return view('admin.data_kampus.create');
    }

    public function store(Request $request)
    {

         $validatedData = $request->validate([
            'nama' => 'required|string',
            'kuota_pendaftar' => 'required|numeric',
            'kuota_diterima' => 'required|numeric',
        ], [
            'nama.required'=>'nama wajib di isi',
            'kuota_pendaftar.required'=>'wajib di isi',
            'kuota_diterima.required'=>' wajib di isi'
        ]);
            $kampus = Kampus::create([
                'nama' => $request->nama,
                'kuota_pendaftar' => $request->kuota_pendaftar,
                'kuota_diterima' => $request->kuota_diterima,
            ]);
            return view('/admin/data_kampus/create');
    }

    public function edit($id)
    {
        $editkampus = Kampus::find($id);
        return view('admin.data_kampus.edit', compact('editkampus'));
    }
    public function update(Request $request, $id)
    {
        dd($request);
        // $kampus = Kampus::find($id);
        // Kampus::where('id',$id)
        // ->update([
        //     'nama' => $request->nama,
        //     'kuota_pendaftar' => $request->kuota_pendaftar,
        //     'kuota_diterima' => $request->kuota_diterima,

        // ]);
        // $kampus->nama = $request->nama;
        // $kampus->kuota_pendaftar = $request->kuota_pendaftar;
        // $kampus->kuota_diterima = $request->kuota_diterima;
        // $kampus->update();
        // return $id;
        // return view('admin.data_kampus.create');
    }

    public function destroy($id)
    {
        $results = Kampus::all();
            $delete = Kampus::where('id',$id);
            // if ($delete != null) {
                $delete->delete();

                return view('admin.data_kampus.index',compact('results'));
            // }

    }
}
