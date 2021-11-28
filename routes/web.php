<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\UserPublicController;

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

// view users public
Route::get('/', [UserPublicController::class, 'index']);
Route::get('/about', function () {
    return view('Users.about');
});

// login
Route::get('/login', [LoginController::class, 'auth'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// registrasi
Route::get('/registrasi', [RegistrasiController::class, 'registrasi'])->middleware('guest');
Route::post('/registrasi', [RegistrasiController::class, 'store']);

Route::group(['middleware'=>['auth']],function () { 
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
    // karyawan
    Route::get('/data-karyawan', [KaryawanController::class, 'index'])->name('data-karyawan');
    // tambah data
    Route::get('/tambah-data', [KaryawanController::class,'create']);
    // masukkan ke database
    Route::post('/insert-data', [KaryawanController::class, 'store']);
    // tampilin data yang udah dibuat
    Route::get('/tampil-data/{id}', [KaryawanController::class, 'edit']);
    Route::post('/edit-data/{id}', [KaryawanController::class, 'update']);
    Route::get('/delete/{id}', [KaryawanController::class, 'destroy']);
    Route::resource('/databarang', BarangController::class);

});