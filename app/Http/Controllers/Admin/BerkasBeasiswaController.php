<?php

namespace App\Http\Controllers\Admin;

use App\Models\BerkasModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerkasBeasiswaController extends Controller
{
    public function index()
    {
        $title="Dashboard GenBi";
        $datas = BerkasModel::latest();
        $jumlah_berkas=BerkasModel::count();
        if(request('search')){
            $datas->where('nama', 'like', "%" .request('search') . "%")
            ->orWhere('universitas', 'like', "%" .request('search') . "%")
            ->orWhere('nim', 'like', "%" .request('search') . "%");
        }

        return view("admin.berkas_beasiswa.index",[
                "datas"=>$datas->get(),
                "title"=>$title,
                "jumlah_berkas"=>$jumlah_berkas
            ]);
    }


    public function create()
    {
       return view('admin.berkas_beasiswa.tambah');
    }

    public function store(Request $request)
    {

        $request->validate([
            "nama" => "required",
            "nim" => "required",
            "universitas" => "required",
            "prodi" => "required",
            "semester" => "required|numeric",
            "alamat" => "required",
            "tgl_lahir" => "required|date",
            "tmp_lahir" => "required",
            "jk" => "required",
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
            "suket_beasiswa"=> "required|mimes:pdf|max:10000",
            "sktm"=> "required|mimes:pdf|max:10000",
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

        //file pdf
        $transkip = $request->file('transkip');
        $nametranskip = time() . "_" . $transkip->getClientOriginalName();
        $path = 'data/pdf';
        $transkip->move($path, $nametranskip);

        $khs = $request->file('khs');
        $namekhs = time() . "_" . $khs->getClientOriginalName();
        $path = 'data/pdf';
        $khs->move($path, $namekhs);

        $suket_beasiswa = $request->file('suket_beasiswa');
        $namesuket_beasiswa = time() . "_" . $suket_beasiswa->getClientOriginalName();
        $path = 'data/pdf';
        $suket_beasiswa->move($path, $namesuket_beasiswa);

        $sertifikat = $request->file('sertifikat');
        $namesertifikat = time() . "_" . $sertifikat->getClientOriginalName();
        $path = 'data/pdf';
        $sertifikat->move($path, $namesertifikat);

        $motivation_later = $request->file('motivation_later');
        $namemotivation_later = time() . "_" . $motivation_later->getClientOriginalName();
        $path = 'data/pdf';
        $motivation_later->move($path, $namemotivation_later);

         BerkasModel::create([
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
            'status'=>'Tidak Lolos'
        ]);


        session()->flash("success", "Berkas Berhasil Ditambah");
        return redirect()->route('berkas.index');

    }

    public function show($id)
    {
        $detail_berkas = BerkasModel::findOrFail($id);

        return view('admin.berkas_beasiswa.detail', compact('detail_berkas'));
    }


    public function edit($id)
    {
    //
    }

    public function destroy($id)
    {
        $delete = BerkasModel::findOrFail($id);
        $delete->delete();

        session()->flash("success", "Berhasil Dihapus");
        return redirect()->route('berkas.index');
    }

}
