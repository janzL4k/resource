<?php

namespace App\Http\Controllers;

use App\Models\BerkasModel;
use Illuminate\Http\Request;

class DatakampusController extends Controller
{
    public function index(){
        // $results = BerkasModel::where('universitas', 'LIKE', '%' . 'bumigora' . '%')->get();
        // $results = BerkasModel::where('universitas', 'LIKE', '%' . 'bumigora' . '%')->get();

        $result = BerkasModel::where('universitas', '=', 'bumigora')->first();

        // $id = $result->id;
        // $klub = $result->klub;
        // $pemain = $result->pemain;


        // dd($results);
        // $this->cetakArray($results);
        // $kampus = BerkasModel::where('universitas');
        return view('admin.data_kampus.index', compact('result'));
    }
}
