<?php

namespace App\Http\Controllers;

use App\Models\BerkasModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LolosBerkasController extends Controller
{
    public function index(Request $request){

        $data = $request->id;
        dd($data);

        // $pdfdata = \DB::table('importpdfs')->get();

        // return view('showrecord', compact('data', 'pdfdata '));
        // $detail_berkas = BerkasModel::findOrFail($id);
        // $lolos= 'Lolos';
        // return view('admin.mahasiswa_calon.index', compact('lolos', 'detail_berkas'));
    }

    public function show(){

       return view('admin.mahasiswa_calon.detail_calon');
    }
}
