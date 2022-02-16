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
        $mahasiswa_penerima = BerkasModel::where('status', 'Lolos')->get();
    //    return $mahasiswa_penerima;
        // $mahasiswa = $mahasiswa_penerima->where('status', 'Lolos');
        return view('admin.mahasiswa_penerima.index', compact('mahasiswa_penerima'));
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
