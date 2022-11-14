<?php

namespace App\Http\Controllers\Api;

use App\Models\BerkasModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerkasController extends Controller
{
    public function index()
    {

            $berkas = BerkasModel::latest()->paginate(10);

            return response()->json([

                "response" => [
                    "status" => 200,
                    "message" => "List Data Berkas"
                ],

                "data" => $berkas
            ], 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "nim" => "required|numeric",
            "universitas" => "required",
            "prodi" => "required",
            "semester" => "required|numeric",
            "alamat" => "required",
            "tgl_lahir" => "required|date",
            "tmp_lahir" => "required",
            "jk" => "required|in:Laki-Laki,Perempuan",
            "agama" => "required",
            "ayah" => "required",
            "pekerjaan_ayah" => "required",
            "ibu" => "required",
            "pekerjaan_ibu" => "required",
            "saudara" => "required",
            "foto" => "required|image|mimes:jpeg,png,jpg|max:5048",
            "ktp" => "required|image|mimes:jpeg,png,jpg|max:5048",
            "kk" => "required|image|mimes:jpeg,png,jpg|max:5048",
            "transkip"=> "required|mimes:pdf|max:10000",
            "khs" => "required|mimes:pdf|max:10000",
            "suket_beasiswa"=> "required|image|mimes:jpeg,png,jpg|max:5048",
            "sktm"=> "required|image|mimes:jpeg,png,jpg|max:5048",
            "sertifikat"=> "required|mimes:pdf|max:10000",
            "motivation_later" => "required|mimes:pdf|max:10000",

        ]);

        $foto = $request->file('foto');
        $namefoto = time() . "_" . $foto->getClientOriginalName();
        $path = 'data/foto';
        $foto->move($path, $namefoto);

        $ktp = $request->file('ktp');
        $namektp = time() . "_" . $ktp->getClientOriginalName();
        $path = 'data/foto';
        $ktp->move($path, $namektp);

        $kk = $request->file('kk');
        $namekk = time() . "_" . $kk->getClientOriginalName();
        $path = 'data/foto';
        $kk->move($path, $namekk);

        $sktm = $request->file('sktm');
        $namesktm = time() . "_" . $sktm->getClientOriginalName();
        $path = 'data/foto';
        $sktm->move($path, $namesktm);
        
        $suket_beasiswa = $request->file('suket_beasiswa');
        $namesuket_beasiswa = time() . "_" . $suket_beasiswa->getClientOriginalName();
        $path = 'data/foto';
        $suket_beasiswa->move($path, $namesuket_beasiswa);

        //file pdf
        $transkip = $request->file('transkip');
        $nametranskip = time() . "_" . $transkip->getClientOriginalName();
        $path = 'data/pdf';
        $transkip->move($path, $nametranskip);

        $khs = $request->file('khs');
        $namekhs = time() . "_" . $khs->getClientOriginalName();
        $path = 'data/pdf';
        $khs->move($path, $namekhs);

        $sertifikat = $request->file('sertifikat');
        $namesertifikat = time() . "_" . $sertifikat->getClientOriginalName();
        $path = 'data/pdf';
        $sertifikat->move($path, $namesertifikat);

        $motivation_later = $request->file('motivation_later');
        $namemotivation_later = time() . "_" . $motivation_later->getClientOriginalName();
        $path = 'data/pdf';
        $motivation_later->move($path, $namemotivation_later);

        $berkas = BerkasModel::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'universitas' => $request->universitas,
            'prodi' => $request->prodi,
            'semester' => $request->semester,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'tmp_lahir' => $request->tmp_lahir,
            'jk' => $request->jk,
            'agama' =>  $request->agama,
            'ayah' => $request->ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'ibu' => $request->ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ayah,
            'saudara' => $request->saudara,
            'foto' => $namefoto,
            'ktp' => $namektp,
            'kk' => $namekk,
            'transkip' => $nametranskip,
            'khs' => $namekhs,
            'suket_beasiswa' => $namesuket_beasiswa,
            'sktm' => $namesktm,
            'sertifikat' => $namesertifikat,
            'motivation_later' => $namemotivation_later,
            'status'=>'Tidak Lolos',
        ]);

        return response()->json([
            "response" => [
                'status' => 'success',
                'message' => 'data success created',
            ],
            'data' => [
                'berkas' => $berkas,
            ],
        ], 200);
    }
}
