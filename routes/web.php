<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LolosBerkasController;
use App\Http\Controllers\DatamahasiswaController;
use App\Http\Controllers\BerkasbeasiswaController;
use App\Http\Controllers\DatakampusController;
use App\Http\Controllers\MahasiswaCalonController;
use App\Http\Controllers\MahasiswaLolosController;
use App\Http\Controllers\ProfilController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// dashboard
Route::get('/', [DashboardController::class, 'index'])->name('/');


Route::resource('berkas', BerkasbeasiswaController::class);

// berkas_beasiswa
// Route::get('/berkas_beasiswa', [BerkasbeasiswaController::class, 'index'])->name('berkas_beasiswa');
// Route::get('/detail_berkas', [BerkasbeasiswaController::class, 'show'])->name('detail_berkas');
// Route::get('/tambah_berkas', [BerkasbeasiswaController::class, 'create'])->name('tambah_berkas');
// Route::post('/admin.post.store', [BerkasbeasiswaController::class, 'store'])->name('admin.post.store');



// data mahasiswa_calon
Route::get('mahasiswa_calon.index', [MahasiswaCalonController::class, 'index'])->name('mahasiswa_calon.index');
Route::get('mahasiswa_calon.show/{id}', [MahasiswaCalonController::class, 'show'])->name('mahasiswa_calon.show');
Route::post('mahasiswa_calon.store', [MahasiswaCalonController::class, 'store'])->name('mahasiswa_calon.store');
//export pdf
Route::get('mahasiswa_calon.exportpdf/{id}', [MahasiswaCalonController::class, 'exportpdf'])->name('mahasiswa_calon.exportpdf');
Route::get('mahasiswa_calon.pdff', [MahasiswaCalonController::class, 'pdff'])->name('mahasiswa_calon.pdff');
// Route::get('mahasiswa_calon.create', [MahasiswaCalonController::class, 'create'])->name('mahasiswa_calon.create');


//controller Berkas lolos
Route::get('set_lolos.index', [LolosBerkasController::class, 'index'])->name('set_lolos.index');
// Route::get('set_lolos.show', [LolosBerkasController::class, 'show'])->name('set_lolos.show');

//mahasiswa penerima beasiswa
Route::get('mahasiswa_penerima.index', [MahasiswaLolosController::class, 'index'])->name('mahasiswa_penerima.index');



//data kampus penerima
Route::get('data_kampus.index', [DatakampusController::class, 'index'])->name('data_kampus.index');


//profile
Route::get('profile.index', [ProfilController::class, 'index'])->name('profile.index');

