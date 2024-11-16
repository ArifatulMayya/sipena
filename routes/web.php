<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function() {
    return view('login');
});

Route::get('/dashboardMhs', function () {
    return view('dashboardMhs');
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


