<?php

use App\Models\Akun;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\PostController;

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
    return view('home', [
        "title" => "Halaman Depan",
        "menuid" => 1,
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Saya",
        "menuid" => 2,
        "nama" => "Tommy Irawan Patra",
        "email" => "tommyirawanp@iainkendari.ac.id",
        "alamat" => "BTN Rizky Blok B/2 Ranomeeto Konawe Selatan, Prov. Sulawesi Tenggara",
        "foto" => "img/ttd.png",
    ]);
});

//latihan csrf
Route::get('/coba', [CobaController::class, 'index']);
Route::post('/coba/csrf', [CobaController::class, 'csrf']);

//latihan controller akun lewatkan data dari array ke collection
Route::get('/akun', [AkunController::class, 'index']);
Route::get('/detail-pegawai/{slug}', [AkunController::class, 'detail']);

//router untuk controller post  latihan db pakai tinker --> collection, 
//akses collection bisa array bisa object
Route::get('/post', [PostController::class, 'index']);
Route::get('/post/detail/{slug:nip}', [PostController::class, 'detail']);
