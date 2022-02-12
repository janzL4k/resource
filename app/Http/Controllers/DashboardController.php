<?php

namespace App\Http\Controllers;

use App\Models\BerkasModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(){
        $berkas = BerkasModel::count();
        return view('admin.dashboard.index', compact('berkas'));
    }
}
