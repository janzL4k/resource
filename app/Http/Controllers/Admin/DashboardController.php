<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pengumuman;
use App\Models\BerkasModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kampus;
use App\Models\User;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class DashboardController extends Controller
{
    public function index(){
        $berkas = BerkasModel::count();
        $pengumuman = Pengumuman::count();
        $diterima = BerkasModel::where('status', 'Lolos')->count();
        $calon = BerkasModel::where('status', 'Tidak Lolos')->count();
        $kampus = Kampus::count();
        $user = User::count();
        return view('admin.dashboard.index', compact('berkas','pengumuman', 'diterima', 'kampus','calon', 'user'));
    }
}
