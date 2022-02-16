<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pengumuman;
use App\Models\BerkasModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $berkas = BerkasModel::count();
        $pengumuman = Pengumuman::count();
        $diterima = BerkasModel::where('status', 'Lolos')->count();
        return view('admin.dashboard.index', compact('berkas','pengumuman', 'diterima'));
    }
}
