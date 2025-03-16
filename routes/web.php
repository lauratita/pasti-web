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

// dashboard
Route::get('/', function () {
    return view('pages.index', ['type_menu' => 'dashboard']);
})->name('dashboard');

Route::get('/reset-password', function () {
    return view('pages.auth.resetPassword');
})->name('reset.password');

// data siswa
Route::get('/data-siswa', function () {
    return view('pages.data.siswa', ['type_menu' => 'data']);
})->name('data.siswa');
Route::get('/kelas', function () {
    return view('pages.data.kelas', ['type_menu' => 'data']);
})->name('kelas');
Route::get('/mata-pelajaran', function () {
    return view('pages.data.mapel', ['type_menu' => 'data']);
})->name('mata.pelajaran');
Route::get('/jadwal-mata-pelajaran', function () {
    return view('pages.data.jadwalMapel', ['type_menu' => 'data']);
})->name('jadwal.mata.pelajaran');
Route::get('/detail-mata-pelajaran', function () {
    return view('pages.data.detailMapel', ['type_menu' => 'data']);
})->name('detail.mata.pelajaran');

// pegawai
Route::get('/daftar-pegawai', function () {
    return view('pages.data.pegawai', ['type_menu' => 'pegawai']);
})->name('daftar.pegawai');
Route::get('/jenis-pegawai', function () {
    return view('pages.data.jenisPegawai', ['type_menu' => 'pegawai']);
})->name('jenis.pegawai');

// wali murid
Route::get('/wali-murid', function () {
    return view('pages.data.waliMurid', ['type_menu' => '']);
})->name('wali.murid');

// siswa
Route::get('/presensi', function () {
    return view('pages.siswa.presensi', ['type_menu' => '']);
})->name('presensi');
Route::get('/surat-izin', function () {
    return view('pages.siswa.suratIzin', ['type_menu' => '']);
})->name('surat.izin');

// laporan
Route::get('/rekap', function () {
    return view('pages.laporan.rekap', ['type_menu' => '']);
})->name('rekap');

// ADD data siswa
Route::get('/add-data-siswa', function() {
    return view('pages.data.tambahDataSiswa');
})->name('tambah.data.siswa');

// ADD data kelas
Route::get('/add-data-kelas', function() {
    return view('pages.data.tambahDataKelas');
})->name('tambah.data.kelas');

// ADD data mapel
Route::get('/add-data-mapel', function() {
    return view('pages.data.tambahDataMapel');
})->name('tambah.data.mapel');

// ADD data detail mapel
Route::get('/add-data-detailMapel', function() {
    return view('pages.data.tambahDetailMapel');
})->name('tambah.data.detail');
