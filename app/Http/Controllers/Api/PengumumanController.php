<?php

namespace App\Http\Controllers\Api;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengumumanController extends Controller
{
    public function index()
    {
        $data = Pengumuman::all();

        return response()->json([
            'status' => true,
            'message' => 'list data berkas',
            'data' => $data
        ], 200);
    }


    public function store(Request $request)
    {
        $request->validate([

            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $data = Pengumuman::create([

            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'data success created',
            'data' => [
                'pengumuman' => $data,
            ],
        ], 200);
    }

    public function show($id)
    {
        $data = Pengumuman::findOrFail($id);

        return response()->json([
            'status' => 'success',
            'message' => 'list data pengumuman',
            'data' => [
                'pengumuman' => $data,
            ],
        ], 200);
    }
}
