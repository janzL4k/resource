<?php

namespace App\Http\Controllers;

use App\Models\BerkasModel;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(){
        $berkas = BerkasModel::count();
        $pengumuman = Pengumuman::count();
        $diterima = BerkasModel::where('status', 'Lolos')->count();
        return view('admin.dashboard.index', compact('berkas','pengumuman', 'diterima'));
    }
}
