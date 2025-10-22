<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () { 
return "Hello World"; 
}); 

Route::get('/user', function () { 
return "Hello User"; 
}); 

// Langkah 1: Route GET untuk menampilkan form
Route::get('/form-produk', function () {
    return view('form-produk');
});

// Langkah 2: Route POST untuk menerima data form
Route::post('/kirim-produk', function (Request $request) {
    $nama = $request->input('nama');
    $harga = $request->input('harga');
    $kategori = $request->input('kategori');

    return "Produk bernama <b>$nama</b> dengan harga <b>Rp$harga</b> termasuk kategori <b>$kategori</b> berhasil dikirim!";
});

// Langkah 3: Route GET untuk menampilkan form edit
Route::get('/produk/edit', function () { 
    return view('edit-produk');
});


// Langkah 4: Route PUT untuk menerima data edit
Route::put('/produk/update', function (Request $request) { 
    $namaBaru = $request->input('nama'); 
    $hargaBaru = $request->input('harga'); 
    $kategoriBaru = $request->input('kategori'); 
 
    return "Data produk berhasil diperbarui menjadi:<br> 
            <b>Nama:</b> $namaBaru <br> 
            <b>Harga:</b> Rp$hargaBaru <br> 
            <b>Kategori:</b> $kategoriBaru"; 
});