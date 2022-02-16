<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kampus;
use App\Models\BerkasModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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


    public function show($id)
    {
        $kampus = Kampus::findOrFail($id);

        return view('admin.data_kampus.show', ['kampus'=> $kampus]);
    }


    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'kuota_pendaftar' => 'required|numeric',
            'kuota_diterima' => 'required|numeric',
        ]);
            Kampus::create([
                'nama' => $request->nama,
                'kuota_pendaftar' => $request->kuota_pendaftar,
                'kuota_diterima' => $request->kuota_diterima,
            ]);

            session()->flash('success', 'Data Kampus Berhasil Di Tambahkan');
            return redirect()->route('data.kampus.index');
    }

    public function edit($id)
    {
        $editkampus = Kampus::findOrFail($id);
        return view('admin.data_kampus.edit', compact('editkampus'));
    }

    public function update(Request $request, $id)
    {
        $kampus = Kampus::findOrFail($id);
        $kampus->nama = $request->nama;
        $kampus->kuota_pendaftar = $request->kuota_pendaftar;
        $kampus->kuota_diterima = $request->kuota_diterima;
        $kampus->save();

        session()->flash('success', 'Data Kampus Berhasil Di Update');
        return redirect()->route('data.kampus.index');
    }

    public function destroy($id)
    {
        $kampus = Kampus::findOrFail($id);
        $kampus->delete();

        session()->flash('success', 'Data Kampus Berhasil Di Hapus');
        return redirect()->route('data.kampus.index');
    }
}
