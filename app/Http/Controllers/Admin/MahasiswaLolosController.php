<?php

namespace App\Http\Controllers\Admin;


use App\Models\Mahasiswa;
use App\Models\BerkasModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class MahasiswaLolosController extends Controller
{
    public function index(){

        $diterima = BerkasModel::latest();
        $jumlah_penerima = BerkasModel::where('status', 'Lolos')->count();
        if(request('search')){
            $diterima->where('nama', 'like', "%" .request('search') . "%")
            ->orWhere('universitas', 'like', "%" .request('search') . "%");
        }
        return view('admin.mahasiswa_penerima.index',[
                "diterima"=>$diterima->where('status', 'Lolos')->get(),
                "jumlah_penerima"=>$jumlah_penerima,
            ]);
    }

public function export(){
    $mahasiswa_penerima = BerkasModel::where('status', 'Lolos')->get();
    // return view('admin.mahasiswa_penerima.export', compact('mahasiswa_penerima'));
    // $exportpdf= BerkasModel::find($id);
    $pdf = app('dompdf.wrapper');


    $pdf->loadview('admin.mahasiswa_penerima.export',['mahasiswa_penerima'=>$mahasiswa_penerima]);

    return $pdf->download('Mahasiswa Lolos.pdf');
}
public function export_pdf(){
    $mahasiswa_penerima = BerkasModel::where('status', 'Lolos')->get();
    return view('admin.mahasiswa_penerima.export', compact('mahasiswa_penerima'));
}

}
