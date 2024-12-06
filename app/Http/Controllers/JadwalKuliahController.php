<?php

namespace App\Http\Controllers;

use App\Models\Jadwalkuliah;
use Illuminate\Http\Request;

class JadwalKuliahController extends Controller
{
    
    public function index()
    {
        // Fetch all Jadwalkuliah records from the database
        $totaljadwalkuliah = Jadwalkuliah::all();

        $approvedjadwalkuliah = Jadwalkuliah::where('status', 'Approved')->count();        

        // Return the view with the Jadwalkuliah data
        return view('baDashboard', compact('totalJadwalkuliah', 'approvedJadwalkuliah'));
    }
    public function buatJadwalkuliah()
    {
        // Fetch all Jadwalkuliah records from the database
        $jadwalkuliahs = Jadwalkuliah::all();

        // Return the view with the Jadwalkuliah data
        return view('kpBuatJadwal', compact('Jadwalkuliahs'));
    }

    public function showJadwalkuliahForApproval()
    {
        // Get all Jadwalkuliah that are pending approval (status = "Pending")
        $jadwalkuliahForApproval = Jadwalkuliah::where('status', 'Pending')->get();

        // Pass the data to the view
        return view('dekanPersetujuanJadwalkuliah', compact('JadwalkuliahForApproval'));
    }

    public function index2()
    {
        // Get the total number of room submissions
        $totaljadwalkuliah = Jadwalkuliah::count();

        // Get the number of approved room submissions
        $approvedjadwalkuliah = Jadwalkuliah::where('status', 'Approved')->count();

        // Pass the data to the view
        return view('dekanDashboard', compact('totalJadwalkuliah', 'approvedJadwalkuliah'));
    }

    // public function showTotalJadwalkuliah()
    // {
    //     // Ambil semua Jadwalkuliah yang statusnya "Pending"
    //     $JadwalkuliahForApproval = Jadwalkuliah::where('status', 'Pending')->get();

    //     // Hitung jumlah Jadwalkuliah yang sudah disetujui
    //     $approvedCount = Jadwalkuliah::where('status', 'Approved')->count();

    //     // Hitung total Jadwalkuliah yang diajukan
    //     $totalCount = Jadwalkuliah::count();

    //     // Pass data ke view
    //     return view('dekanDashboard', compact('JadwalkuliahForApproval', 'approvedCount', 'totalCount'));
    // }

    /**
     * Approve the room.
     */
    public function approveJadwalkuliah($id)
    {
        $jadwalkuliah = Jadwalkuliah::findOrFail($id);
        $jadwalkuliah->status = 'Approved'; // Setujui Jadwalkuliah
        $jadwalkuliah->save();

        // Perbarui jumlah pengajuan yang disetujui
        $approvedCount = Jadwalkuliah::where('status', 'Approved')->count();

        // Kembali ke halaman persetujuan dengan notifikasi
        return redirect()->route('jadwalkuliah.approval')->with('success', 'jadwalkuliah disetujui! Jumlah pengajuan yang disetujui: ' . $approvedCount);
    }

    /**
     * Reject the room.
     */
    public function rejectJadwalkuliah($id)
    {
        $jadwalkuliah = Jadwalkuliah::findOrFail($id);
        $jadwalkuliah->status = 'Rejected'; // Tolak Jadwalkuliah
        $jadwalkuliah->save();

        // Kembali ke halaman persetujuan dengan notifikasi
        return redirect()->route('jadwalkuliah.approval')->with('error', 'jadwalkuliah ditolak!');
    }

    

    public function dashboard()
    {
        // Fetch the count of all Jadwalkuliah records
        $totalpengajuanjadwalkuliah = Jadwalkuliah::count();

        // Pass the count to the view
        return view('baDashboard', compact('totalPengajuanJadwalkuliah'));
    }

    
    /**
     * Store a newly created resource in the database.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'kode_mk' => 'required|string|max:10', // Kode mata kuliah
            'nama_mk' => 'required|string|max:255', // Nama mata kuliah
            'kelas' => 'required|integer|min:1', // Nomor kelas
            'hari' => 'required|string|max:10', // Hari (misalnya "Senin", "Selasa")
            'nama_ruang' => 'required|string|max:50', // Nama ruangan
            'sks' => 'required|integer|min:1|max:6', // Jumlah SKS (1-6)
            'sifat' => 'required|string|max:20', // Sifat mata kuliah (misalnya "Wajib", "Pilihan")
            'wkt_mulai' => 'required|date_format:H:i', // Format waktu mulai (HH:mm)
            'wkt_selesai' => 'required|date_format:H:i|after:wkt_mulai', // Format waktu selesai, harus setelah waktu mulai
            'kuota' => 'required|integer|min:1|max:100', // Kapasitas kelas (1-100)
        ]);

        // Create a new Jadwalkuliah record and save it to the database
        $data = [
            'kode_mk' => $request->input('kode_mk'), // Mengambil input kode mata kuliah
            'nama_mk' => $request->input('nama_mk'), // Mengambil input nama mata kuliah
            'kelas' => $request->input('kelas'), // Mengambil input nomor kelas
            'hari' => $request->input('hari'), // Mengambil input hari
            'nama_ruang' => $request->input('nama_ruang'), // Mengambil input nama ruangan
            'sks' => $request->input('sks'), // Mengambil input jumlah SKS
            'sifat' => $request->input('sifat'), // Mengambil input sifat mata kuliah
            'wkt_mulai' => $request->input('wkt_mulai'), // Mengambil input waktu mulai
            'wkt_selesai' => $request->input('wkt_selesai'), // Mengambil input waktu selesai
            'kuota' => $request->input('kuota'), // Mengambil input kapasitas kuota
            'status' => 'Pending', // Menetapkan status default sebagai "Pending"
        ];
        Jadwalkuliah::create($data);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Jadwalkuliah berhasil ditambahkan!');
    }
}
