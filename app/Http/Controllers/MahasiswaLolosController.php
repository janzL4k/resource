<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaLolosController extends Controller
{
    public function index(){
        $mahasiswa_penerima = Mahasiswa::all();
        return view('admin.mahasiswa_penerima.index');
    }
}
