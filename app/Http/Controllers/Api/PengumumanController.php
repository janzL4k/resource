<?php

namespace App\Http\Controllers\Api;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::latest()->paginate(10);

            return response()->json([

                "response" => [
                    "status" => 200,
                    "message" => "List Data Pengumuman"
                ],

                "data" => $pengumuman
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

            "response" => [
                "status" => 200,
                "message" => "Pengumuman Succes Created!"
            ],

            "data" => $data
        ], 200);
    }

    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        if($pengumuman)
        {
            return response()->json([
                "response" => [
                    "status" => 200,
                    "message" => "List Data Pengumuman"
                ],
                "data" => $pengumuman->latest()->paginate(6)
            ], 200);

        }else {

            return response()->json([
                "response" => [
                    "status" => 404,
                    "message" => "Data Pengumuman Tidak Ditemukan!"
                ],
                "data" => null
            ], 404);
        }
     }
}
