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
    $npm = [2109020120, 2109020121, 2109020122, 2109020123, 2109020124];
    $nama = ['Wahyu Ardiansyah', 'Ilham Wicak', 'Petir Alam', 'Dicky Rahman', 'Bob Darmawan'];
    $jurusan = ['Teknologi Informasi', 'Sistem Informasi', 'Data Sains', 'Sistem Informasi', 'Data Sains'];
    $kelas = ['C1', 'C2', 'D1', 'A2', 'B3'];
    $jumlah = count($npm);
    return view('mahasiswa', compact('npm', 'jumlah', 'nama', 'jurusan', 'kelas'));
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

