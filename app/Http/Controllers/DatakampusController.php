<?php

namespace App\Http\Controllers;

use App\Models\BerkasModel;
use Illuminate\Http\Request;

class DatakampusController extends Controller
{
    public function index(){
    $result = BerkasModel::where('universitas', '=', 'bumigora')->first();
        return view('admin.data_kampus.index', compact('result'));
    }

    public function create(){

            return view('admin.data_kampus.create');
        }

        public function store(Request $request){

            // $kampus = Kampus
        }

}
