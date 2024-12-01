<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RuangController;

Route::get('/login', [LoginController::class,'store']);

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'create'])
        ->name('login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});

Route::post('/ruang', [RuangController::class, 'store'])->name('ruang.store');
Route::get('/baBuatRuang', [RuangController::class, 'index'])->name('ruang.index');

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/dekanDashboard', function () {
    return view('dekanDashboard');
});

Route::get('/dekanPersetujuanRuang', function (){
    return view('dekanPersetujuanRuang');
});

Route::get('/dekanPersetujuanJadwal', function (){
    return view('dekanPersetujuanJadwal');
});

Route::get('/baDashboard', [RuangController::class, 'dashboard'])->name('dashboard');
// Route::get('/baDashboard', function (){
//     return view('baDashboard');
// });

// Route::get('/baBuatRuang', function (){
//     return view('baBuatRuang');
// });
Route::get('/baKalender', function (){
    return view('baKalender');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboardPA', function () {
    return view('dashboardPA');
});

Route::get('/dosenBimbingan', function () {
    return view('dosenBimbingan');
});

Route::get('/studi', function () {
    return view('studi');
});

Route::get('/dosenPengajuanIRS', function () {
    return view('dosenPengajuanIRS');
});

Route::get('/buatIRSMhs', function () {
    return view('buatIRSMhs');
});

Route::get('/irsMhs', function () {
    return view('irsMhs');
});

Route::get('/khsMhs', function () {
    return view('khsMhs');
});

Route::get('/transkripMhs', function () {
    return view('transkripMhs');
});

Route::get('/dashboardMhs', function () {
    return view('dashboardMhs');
});

Route::get('/kpMahasiswa', function () {
    return view('kpMahasiswa');
});

Route::get('/kpPerkembangan', function () {
    return view('kpPerkembangan');
});

Route::get('/kpMahasiswa', function () {
    return view('kpMahasiswa');
});

Route::get('/kpBuatJadwal', function () {
    return view('kpBuatJadwal');
});

Route::get('/kpirsVerifikasi', function () {
    return view('kpirsVerifikasi');
});

Route::get('/transkripMhs', function () {
    return view('transkripMhs');
});

Route::get('/kpstudi', function(){
    return view('kpstudi');
});

Route::get('/kpDashboard', function(){
    return view('kpDashboard');
});




