<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
        public function index(){

            $profil = User::first();

            return view('admin.profil.admin.index', ['profil'=>$profil]);
        }


        public function update(Request $request)
        {
            $user = User::findOrFail(Auth::user()->id);

            $user->password = bcrypt($request->password);
            $user->name = $request->name;
            $user->save();

            session()->flash("success", "Data Profil Berhasil Diupdate");
            return redirect()->route("profil.index");
        }
}
