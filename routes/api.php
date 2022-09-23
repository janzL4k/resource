<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\BerkasController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\PengumumanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:api');

// berkas
Route::get('/berkas/index', [BerkasController::class, 'index'])->middleware('auth:api');
Route::post('/berkas', [BerkasController::class, 'store'])->middleware('auth:api');

// pengumuman route
Route::get('/pengumuman/index', [PengumumanController::class, 'index'])->middleware('auth:api');
Route::post('/pengumuman', [PengumumanController::class, 'store'])->middleware('auth:api');
Route::get('/pengumuman/detail/{id}', [PengumumanController::class, 'show'])->middleware('auth:api');

