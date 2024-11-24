<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function() {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
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

Route::get('/baDashboard', function (){
    return view('baDashboard');
});

Route::get('/baBuatRuang', function (){
    return view('baBuatRuang');
});
Route::get('/baKalender', function (){
    return view('baKalender');
});

Route::get('/', function () {
    return view('login');
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




