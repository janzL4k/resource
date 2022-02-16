<?php

namespace App\Http\Controllers\Admin;

use PDF;
use App\Models\Mahasiswa;
use App\Models\BerkasModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MahasiswaCalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa_calon = BerkasModel::all()->sortBy('id');
        $no=1;
        return view("admin.mahasiswa_calon.index", compact('mahasiswa_calon', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.mahasiswa_calon.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $foto = $request->file('foto');
        // $namefoto = time() . "_" . $foto->getClientOriginalExtension();
        // $path = 'data/foto';
        // $foto->move($path, $namefoto);

        // $ktp = $request->file('ktp');
        // $namektp = time() . "_" . $ktp->getClientOriginalName();
        // $path = 'data/foto';
        // $ktp->move($path, $namektp);

        // $kk = $request->file('kk');
        // $namekk = time() . "_" . $kk->getClientOriginalName();
        // $path = 'data/foto';
        // $kk->move($path, $namekk);

        // $sktm = $request->file('sktm');
        // $namesktm = time() . "_" . $sktm->getClientOriginalName();
        // $path = 'data/foto';
        // $sktm->move($path, $namesktm);

        // $kk = $request->file('kk');
        // $size = $ktp->getSize();
        // $namekk = time() . "_" . $ktp->getClientOriginalName();
        // $path = 'images/ktp';
        // $kk->move($path, $namekk);

        $berkas_lolos = Mahasiswa::create([
            'nama' => $request->value,
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
            'saudara' => $request->jmlh_saudara,
            // berkas
            'foto' =>  $request->foto,
            'ktp' => $request->ktp,
            'kk' =>  $request->kk,
            'transkip' => $request->transkip,
            'khs' => $request->khs,
            'suket_beasiswa' => $request->suket_beasiswa,
            'sktm' => $request->sktm,
            'sertifikat' => $request->sertifikat,
            'motivation_later' => $request->motivation_later,
            // 'category_id' => $request->category_id,
            // 'agama' =>  $namePhoto,
        ]);


        session()->flash("success", "Berhasil Diatambah");
        return redirect()->route('mahasiswa_calon.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa_calon = BerkasModel::find($id);
        session()->flash("success", "Berhasil Dihapus");
       return view('admin.mahasiswa_calon.detail_calon', compact('mahasiswa_calon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function exportpdf($id)
    {
        $exportpdf= BerkasModel::find($id);

        $pdf = app('dompdf.wrapper');


        $pdf->loadview('admin.mahasiswa_calon.export-pdf',['exportpdf'=>$exportpdf]);
        return $pdf->download('Berkas Mahasiswa');
    }

    public function pdff(){
        return view('admin.mahasiswa_calon.export-pdf');

    }
}
