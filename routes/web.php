<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JadwalKuliahController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\IRSController;




Route::get('/login', [LoginController::class,'store']);

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('login');  // Login form
    Route::post('login', [LoginController::class, 'store']);  // Form submission (POST)
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [LoginController::class, 'destroy'])->name('logout');
    Route::get('dashboardpa', [DashboardController::class, 'indexpa'])->name('dashboardpa');
    Route::get('dashboardmhs', [DashboardController::class, 'indexmhs'])->name('dashboardmhs');
    Route::get('dashboardba', [DashboardController::class, 'indexba'])->name('dashboardba');
    Route::get('dashboarddekan', [DashboardController::class, 'indexdekan'])->name('dashboarddekan');
    Route::get('dashboardkaprodi', [DashboardController::class, 'indexkaprodi'])->name('dashboardkaprodi');
});


Route::post('/ruang', [RuangController::class, 'store'])->name('ruang.store');
Route::get('/baBuatRuang', [RuangController::class, 'buatRuang'])->name('ruang.buatRuang');

Route::resource('jadwalkuliah', JadwalKuliahController::class);

Route::post('/jadwalkuliah', [JadwalKuliahController::class, 'store'])->name('jadwalkuliah.store');
Route::get('/kpBuatRuang', [JadwalKuliahController::class, 'buatJadwalKuliah'])->name('jadwal.buatJadwal');


Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/dekanDashboard', [RuangController::class, 'index2']);

// Route::get('/dekanDashboard', function () {
//     return view('dekanDashboard');
// });

// Route::get('/dekanPersetujuanRuang', function (){
//     return view('dekanPersetujuanRuang');
// });

Route::post('/pilih-irs/{jadwal_id}', [IRSController::class, 'pilihIRS']);

Route::get('/dekanPersetujuanRuang', [RuangController::class, 'showRuangForApproval'])->name('ruang.approval');
Route::get('/dekanPersetujuanJadwal', [JadwalKuliahController::class, 'showJadwalkuliahForApproval'])->name('showJadwalkuliahForApproval');


Route::post('/ruang/approve', [RuangController::class, 'approveRuang'])->name('ruang.approve');
Route::post('/ruang/approve-all', [RuangController::class, 'approveAll'])->name('ruang.approveAll');
Route::put('/ruang/{id}/reject', [RuangController::class, 'rejectRuang'])->name('ruang.reject');
Route::post('/jadwal/approve', [JadwalKuliahController::class, 'approve'])->name('jadwal.approve');
Route::post('/jadwal/approve-all', [JadwalKuliahController::class, 'approveAll'])->name('jadwal.approveAll');
Route::post('/jadwal/reject', [JadwalKuliahController::class, 'reject'])->name('jadwal.reject');
Route::get('/kpBuatJadwal', [RuangController::class, 'formWithApprovedRuangan'])->name('form.ruangan');

// Route::get('/dekanPersetujuanJadwal', function (){
//     return view('dekanPersetujuanJadwal');
// });

Route::get('/baDashboard', [RuangController::class, 'index'])->name('index');
Route::delete('ruang/{id}', [RuangController::class, 'destroy'])->name('ruang.destroy');
Route::get('/check-ruang/{no_ruang}', function ($noRuang) {
    $ruang = Ruang::where('no_ruang', $noRuang)->first();

    if ($ruang) {
        return response()->json(['exists' => true, 'prodi' => $ruang->prodi]);
    }

    return response()->json(['exists' => false]);
});

// Route::get('/baBuatRuang', function (){
//     return view('baBuatRuang');
// });

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboardPA', [MahasiswaController::class, 'pengajuanIrs'])->name('pengajuanIrs');

Route::get('/dosenBimbingan', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/dosenBimbingan/urutkan', [MahasiswaController::class, 'urutkan'])->name('mahasiswa.urutkan');
Route::get('dosenBimbingan/cari',[MahasiswaController::class,'cari'])->name('mahasiswa.cari');
Route::post('/dosenPengajuanIRS/approve-all', [JadwalKuliahController::class, 'approveAll'])->name('jadwal.approveAll');


Route::get('/studi',[MahasiswaController::class,'perkembanganstudi'])->name('studi');

// Route::get('/dosenPengajuanIRS', function () {
//     return view('dosenPengajuanIRS');
// });
Route::get('/dosenPengajuanIRS', [MahasiswaController::class, 'index1'])->name('mahasiswa.index1');
Route::get('/dosenPengajuanIRS/urutkan', [MahasiswaController::class, 'urutkan1'])->name('mahasiswa.urutkan1');
Route::get('dosenPengajuanIRS/cari',[MahasiswaController::class,'cari1'])->name('mahasiswa.cari1');
Route::post('/irs/setuju', [IRSController::class, 'store'])->name('irs.store');

Route::get('/kpBuatJadwal',[JadwalKuliahController::class,'buatJadwalkuliah'])->name('buatJadwalkuliah');
// Route::get('/kpBuatJadwal',[JadwalKuliahController::class,'matkulJadwalkuliah'])->name('matkulJadwalkuliah');

// Route::get('/buatIRSMhs', function () {
//     return view('buatIRSMhs');
// });
//PUSINGIN IRS MAHASISWA DAHLAH
Route::get('/buatIRSMhs', [JadwalKuliahController::class, 'pilihJadwalKuliah'])->name('pilihJadwalKuliah');
Route::post('/store-jadwal', [JadwalKuliahController::class, 'store2'])->name('store.jadwal');
Route::post('/buat-irs-mhs', [IRSController::class, 'buatIRSMhs'])->name('buatIRSMhs');




Route::get('/irsMhs', function () {
    return view('irsMhs');
});
Route::get('/isi-irsMhs',[MahasiswaController::class,'perkembanganstudi'])->name('studi');

Route::get('/isi-irsMhs', function () {
    return view('isi-irsMhs');
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

// Route::get('/kpBuatJadwal', function () {
//     return view('kpBuatJadwal');
// });

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


// Route::get('/kpKelolaMatkul', function(){
//     return view('kpKelolaMatkul');
// });

Route::get('/kpKelolaMatkul', function(){
    return view('kpKelolaMatkul');
});

// Route::delete('/jadwalkuliah/{id}', [JadwalKuliahController::class, 'destroy'])->name('jadwalkuliah.destroy');

Route::post('jadwalkuliah/{id}', [JadwalKuliahController::class, 'destroy'])->name('jadwalkuliah.destroy');

Route::resource('jadwalkuliah', JadwalKuliahController::class);

Route::get('/kpKelolaMatkul', [MatkulController::class, 'index'])->name('kpKelolaMatkul');
Route::post('/kpKelolaMatkul/store', [MatkulController::class, 'store'])->name('matkul.store');
// Atau jika ingin menambahkan rute secara manual:
Route::get('matkul/{id}/edit', [MatkulController::class, 'edit'])->name('matkul.edit');
Route::put('matkul/{id}', [MatkulController::class, 'update'])->name('matkul.update');
Route::delete('matkul/{id}', [MatkulController::class, 'destroy'])->name('matkul.destroy');



//Route::get('/kpBuatJadwal',[JadwalKuliahController::class,'buatJadwalkuliah'])->name('buatJadwalkuliah');
//IRSBUATMHS
// Route::get('/buatIRSMhs', [JadwalKuliahController::class, 'showApprovedJadwalKuliahirs'])->name('showApprovedJadwalKuliahirs');