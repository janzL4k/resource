<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DatakampusController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\LolosBerkasController;
use App\Http\Controllers\Admin\BerkasbeasiswaController;
use App\Http\Controllers\Admin\MahasiswaCalonController;
use App\Http\Controllers\Admin\MahasiswaLolosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    if (Auth::user()) {
        return redirect()->route('home');
    } else {
        return redirect()->route('login');
    }
});

Route::prefix('admin')->group(function () {
Route::middleware('authorization.admin')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.main.index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    Route::get('berkas.index', [BerkasbeasiswaController::class, 'index'])->name('berkas.index');
    Route::get('berkas.create', [BerkasbeasiswaController::class, 'create'])->name('berkas.create');
    Route::get('berkas.store', [BerkasbeasiswaController::class, 'store'])->name('berkas.store');
    Route::post('berkas.store', [BerkasbeasiswaController::class, 'store'])->name('berkas.store');
    Route::get('berkas.show/{id}', [BerkasbeasiswaController::class, 'show'])->name('berkas.show');
    Route::post('berkas.destroy/{id}', [BerkasbeasiswaController::class, 'destroy'])->name('berkas.destroy');

        // data mahasiswa_calon
    Route::get('mahasiswa_calon.index', [MahasiswaCalonController::class, 'index'])->name('mahasiswa_calon.index');
    Route::get('mahasiswa_calon.show/{id}', [MahasiswaCalonController::class, 'show'])->name('mahasiswa_calon.show');
    Route::post('mahasiswa_calon.store', [MahasiswaCalonController::class, 'store'])->name('mahasiswa_calon.store');
    //export pdf
    Route::get('mahasiswa_calon.exportpdf/{id}', [MahasiswaCalonController::class, 'exportpdf'])->name('mahasiswa_calon.exportpdf');
    Route::get('mahasiswa_calon.pdff', [MahasiswaCalonController::class, 'pdff'])->name('mahasiswa_calon.pdff');

    //controller Berkas lolos
    Route::get('set_lolos.index', [LolosBerkasController::class, 'index'])->name('set_lolos.index');
    Route::post('/set_lolos.update/{id}/', [LolosBerkasController::class, 'update'])->name('set_lolos.update');
    // Route::get('set_lolos.show', [LolosBerkasController::class, 'show'])->name('set_lolos.show');

    //mahasiswa penerima beasiswa
    Route::get('mahasiswa_penerima.index', [MahasiswaLolosController::class, 'index'])->name('mahasiswa_penerima.index');
    Route::get('mahasiswa_penerima.export', [MahasiswaLolosController::class, 'export'])->name('mahasiswa_penerima.export');
    Route::get('mahasiswa_penerima.export_pdf', [MahasiswaLolosController::class, 'export_pdf'])->name('mahasiswa_penerima.export_pdf');

        //data kampus penerima
    Route::get('data_kampus.index', [DatakampusController::class, 'index'])->name('data.kampus.index');
    Route::get('kampus.create', [DatakampusController::class, 'create'])->name('kampus.create');
    Route::get('kampus.show/{id}', [DatakampusController::class, 'show'])->name('kampus.show');
    Route::post('kampus.store', [DatakampusController::class, 'store'])->name('kampus.store');
    Route::get('kampus.store', [DatakampusController::class, 'store'])->name('kampus.store');
    Route::get('kampus.destroy/{id}', [DatakampusController::class, 'destroy'])->name('kampus.destroy');
    Route::get('kampus.edit/{id}', [DatakampusController::class, 'edit'])->name('kampus.edit');
    Route::put('kampus.update/{id}', [DatakampusController::class, 'update'])->name('kampus.update');
    Route::post('kampus.update/{id}', [DatakampusController::class, 'update'])->name('kampus.update');

        //profile
    Route::get('profile.index', [ProfilController::class, 'index'])->name('profil.index');
    Route::put('profil.update', [ProfilController::class, 'update'])->name('profil.update');

    //Pengumuman
    Route::get('pengumuman.index', [PengumumanController::class, 'index'])->name('pengumuman.index');
    Route::get('pengumuman.show/{id}', [PengumumanController::class, 'show'])->name('pengumuman.show');
    Route::get('pengumuman.create', [PengumumanController::class, 'create'])->name('pengumuman.create');
    Route::post('pengumuman.store', [PengumumanController::class, 'store'])->name('pengumuman.store');
    Route::get('pengumuman.edit/{id}', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
    Route::put('pengumuman.update/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');
    Route::post('pengumuman.update/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');
    Route::get('pengumuman.destroy/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');
});
});



