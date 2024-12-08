<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IRS;
use App\Models\JadwalKuliah;
use Illuminate\Support\Facades\Auth;

class IRSController extends Controller
{
    public function pilihIRS($jadwal_id, Request $request)
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            return response()->json(['success' => false, 'message' => 'User not authenticated']);
        }

        // Ambil data jadwal berdasarkan ID
        $jadwal = JadwalKuliah::findOrFail($jadwal_id);
        
        // Simpan ke dalam database IRS
        $irs = IRS::create([
            'user_id' => Auth::id(),
            'jadwal_kuliah_id' => $jadwal->id,
            'status' => 'pilih',
        ]);

        if ($irs) {
            return response()->json(['success' => true, 'message' => 'Jadwal berhasil dipilih!']);
        } else {
            return response()->json(['success' => false, 'message' => 'Gagal menyimpan jadwal.']);
        }
    }
    public function buatIrs()
    {
        // Fetch the schedule data from the database
        $jadwalkuliahs = JadwalKuliah::all();
        $approvedJadwalkuliahirs = Jadwalkuliah::where('status', 'Approved')->get();
    
        // Pass the data to the view
        return view('buatIRSMhs', compact('jadwalkuliahs', 'approvedJadwalkuliahirs'));
    }

    public function showIRS()
    {
        // Ambil semua Jadwalkuliah yang statusnya "Pending"
        $JadwalkuliahForApproval = Jadwalkuliah::where('status', 'Pending')->get();

        // Hitung jumlah Jadwalkuliah yang sudah disetujui
        $approvedCount = Jadwalkuliah::where('status', 'Approved')->count();

        // Hitung total Jadwalkuliah yang diajukan
        $totalCount = Jadwalkuliah::count();

        // Pass data ke view
        return view('dekanDashboard', compact('JadwalkuliahForApproval', 'approvedCount', 'totalCount'));
    }
}


