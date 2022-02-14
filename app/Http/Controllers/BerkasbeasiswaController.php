<?php

namespace App\Http\Controllers;

use App\Models\BerkasModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Validator;


class BerkasbeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="Dashboard GenBi";
        $datas= BerkasModel::all();
        $no=1;
        return view("admin.berkas_beasiswa.index", compact('datas', 'no', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.berkas_beasiswa.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'nama' => 'required|string',
        // 'nim'=>'required',
        // 'inputvideo'=>'required|mimes:mp4'
        // ]);
        // $validatedData = $request->validate([

        //     'nama' => 'required|string',
        //     'nim' => 'required',
        //     'universitas' => 'required',
        //     'prodi' => 'required',
        //     'semester' => 'required|numeric',
        //     'alamat' => 'required',
        //     'tgl_lahir' => 'required|date',
        //     'tmp_lahir' => 'required',
        //     'jk' => 'required|string',
        //     'agama' =>  'required|string',
        //     'ayah' => 'required|string',
        //     'pekerjaan_ayah' => 'required',
        //     'ibu' => 'required',
        //     'pekerjaan_ibu' => 'required',
        //     'saudara' => 'required',
        //     'foto' => 'required',
        //     'ktp' => 'required',
        //     'kk' => 'required',
        //     'transkip' =>'required',
        //     'khs' => 'required',
        //     'suket_beasiswa' => 'required',
        //     'sktm' => 'required',
        //     'sertifikat' => 'required',
        //     'motivation_later' => 'required',

        // ], [
        //     'nama.required'=>'nama wajib di isi',
        //     'nim.required'=>'nim wajib di isi',
        //     'universitas.required'=>'universitas wajib di isi'
        // ]);
        // file foto
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
            'saudara' => $request->jmlh_saudara,

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
            // 'category_id' => $request->category_id,
            // 'agama' =>  $namePhoto,
        ]);


        session()->flash("success", "Berhasil Diatambah");
        return redirect()->route('berkas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail_berkas = BerkasModel::find($id);
        session()->flash("success", "Berhasil Dihapus");
       return view('admin.berkas_beasiswa.detail', compact('detail_berkas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.berkas_beasiswa.detail');
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
        $delete = BerkasModel::find($id);
        $delete->delete();

        session()->flash("success", "Berhasil Dihapus");
        return redirect()->route('berkas.index');
    }
}
