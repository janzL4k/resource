<?php

namespace App\Http\Controllers\Admin;

use PDF;
use App\Models\Mahasiswa;
use App\Models\BerkasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;

class MahasiswaCalonController extends Controller
{
    public function index()
    {
            $title="Dashboard GenBi";
            $listCalon = BerkasModel::where('status', 'Di Review')->get();

            $data = Collection::empty();
            $data->put('title',$title);
            $data->put('listCalon',$listCalon);

            return view("admin.mahasiswa_calon.index",
                [
                    "data"=>$data,
                ]);
    }

    public function create()
    {
        return view("admin.mahasiswa_calon.create");
    }

    public function store(Request $request)
    {
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
            'status'=>'Di Review',
        ]);

        session()->flash("success", "Berhasil Diatambah");
        return redirect()->route('mahasiswa_calon.index');
    }

    public function show($id)
    {
        $mahasiswa_calon = BerkasModel::find($id);
       return view('admin.mahasiswa_calon.detail_calon', compact('mahasiswa_calon'));
    }

    public function exportpdf($id)
    {
        $exportpdf= BerkasModel::find($id);

         $pdf = app('dompdf.wrapper');


         $pdf->loadview('admin.mahasiswa_calon.export-pdf',['exportpdf'=>$exportpdf]);
         return $pdf->download('Berkas Mahasiswa.pdf');
//       return view('admin.mahasiswa_calon.exportPDF',['exportpdf'=>$exportpdf]);
    }

    public function pdff(){
        // $pdf = app('dompdf.wrapper');

        // $pdf->loadview('admin.mahasiswa_calon.export-pdf');
        // return $pdf->download('Berkas Mahasiswa.pdf');
        // return view('admin.mahasiswa_calon.export-pdf');

    }

    public function kampus(){
        $title="Mahasiswa Calon";
        // dd(request('kampus'));
        // $calons = BerkasModel::where('status', 'Tidak Lolos' && 'universitas','');
        $kampus = BerkasModel::orderBy('universitas','desc')->paginate(5);
        // $calons=BerkasModel::where('status', 'Tidak Lolos')
        // ->where('kampus'.request('kampus'))
        // ->get();

        return view("admin.mahasiswa_calon.index",[
                "kampus"=>$kampus->where('status', 'Tidak Lolos'),
                "title"=>$title
            ]);

    }
}
