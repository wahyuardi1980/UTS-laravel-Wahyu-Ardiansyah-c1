<?php

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
    return view('home');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/profile', function () {
    return view('profile', [
        'name' => 'Wahyu Ardiansyah',
        'npm' => '2109020120',
        'jurusan' => 'Teknologi Informasi',
        'kelas' => 'C1',
        'tgl_lahir' => '21 Oktober 2003',
        'tmp_lahir' => 'Medan'
    ]);
});

Route::get('pertemuan5/perulangan', function () {
    return view('pertemuan5/perulangan');
});
