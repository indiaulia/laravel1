<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\TugasController2;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user', [UserController::class, 'halo']);

Route::get('/halaman1', [HalamanController::class, 'index']);

Route::get('/halaman2', [HalamanController::class, 'halaman2']);

Route::get('/welcome', [HalamanController::class, 'welcome']);

Route::get('/tugas', [TugasController::class, 'tugas']);

Route::get('/tampil', [UserController::class, 'index']);

Route::get('/tambah_data', [UserController::class, 'tambah_data']);

Route::post('/tambah_data', [UserController::class, 'input_data']);

Route::get('/tampil_data', [UserController::class, 'tampil_data']);

Route::get('/hapus_data/{id}',[UserController::class, 'hapus_data']);
Route::post('/edit_data/{id}',[UserController::class, 'update_data']);


Route::get('/edit_data/{id}',[UserController::class, 'edit_data']);

// Route::get('/jj/{$id}', [UserController::class, 'update_data']);

Route::get('/latihan_tampil', [TugasController2::class, 'index']);


Route::get('/latihan_tambah_data', [TugasController2::class, 'latihan_tambah_data']);

Route::post('/latihan_tambah_data', [TugasController2::class, 'latihan_input_data']);

Route::get('/latihan_tampil_data', [TugasController2::class, 'latihan_tampil_data']);

Route::get('/latihan_hapus_data/{id}',[TugasController2::class, 'latihan_hapus_data']);
Route::post('/latihan_edit_data/{id}',[TugasController2::class, 'latihan_update_data']);


Route::get('/latihan_edit_data/{id}',[TugasController2::class, 'latihan_edit_data']);



