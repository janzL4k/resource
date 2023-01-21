<?php

namespace App\Http\Controllers\Admin;

use App\Models\BerkasModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Facade;

class BerkasBeasiswaController extends Controller
{
    public function index()
    {
        $title="Dashboard GenBi";
        $berkasmahasiswa = BerkasModel::latest()->get();

        $data = Collection::empty();
        $data->put('title', $title);
        $data->put('berkasmahasiswa', $berkasmahasiswa);

        return view('admin.berkas_beasiswa.index',[
            'data'=> $data
            ]);
    }

    public function create()
    {
        $berkasMahasiswa = BerkasModel::all();

        $jenisKelamin = Collection::empty();
        $jenisKelamin->add("Laki-Laki");
        $jenisKelamin->add("Perempuan");

        $agama = Collection::empty();
        $agama->add("Islam");
        $agama->add("Kristen");
        $agama->add("Katolik");
        $agama->add("Hindu");
        $agama->add("Buddha");
        $agama->add("Konghucu");

        $data = Collection::empty();
        $data->put('agama', $agama);
        $data->put('jenisKelamin', $jenisKelamin);
        $data->put('berkasMahasiswa', $berkasMahasiswa);

       return view('admin.berkas_beasiswa.tambah', [
           'data' => $data,
       ]);
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
            "jenis_kelamin" => "required|in:Laki-Laki,Perempuan",
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
            "form_a1" => "required|mimes:pdf|max:10000",
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
        $path = 'data/pdf';
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

         BerkasModel::create([
             "nama" => "required",
             "nim" => "required|numeric",
             "universitas" => "required",
             "prodi" => "required",
             "semester" => "required|numeric",
             "alamat" => "required",
             "tgl_lahir" => "required|date",
             "tmp_lahir" => "required",
             "jenis_kelamin" => "required|in:Laki-Laki,Perempuan",
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
             "form_a1" => "required|mimes:pdf|max:10000",
             "suket_beasiswa"=> "required|image|mimes:jpeg,png,jpg|max:5048",
             "sktm"=> "required|image|mimes:jpeg,png,jpg|max:5048",
             "sertifikat"=> "required|mimes:pdf|max:10000",
             "motivation_later" => "required|mimes:pdf|max:10000",
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

    public function destroy($id)
    {
        $delete = BerkasModel::findOrFail($id);
        $delete->delete();

        session()->flash("success", "Berhasil Dihapus");
        return redirect()->route('berkas.index');
    }

}
