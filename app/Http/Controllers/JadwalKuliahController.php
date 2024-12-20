<?php

namespace App\Http\Controllers;

use App\Models\Jadwalkuliah;
use App\Models\Matakuliah;
use App\Models\Ruang;
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
        $approvedRuangs = Ruang::where('status', 'Approved')->get();
        $matkuls = Matakuliah::all();

        // Return the view with the Jadwalkuliah data
        return view('kpBuatJadwal', compact('jadwalkuliahs', 'approvedRuangs', 'matkuls'));
    }

    public function showJadwalkuliahForApproval()
    {
        // Get all Jadwalkuliah that are pending approval (status = "Pending")
        $data = Jadwalkuliah::all();

        // Pass the data to the view
        return view('dekanPersetujuanJadwal', compact('data'));
    }
    
    // public function matkulJadwalkuliah()
    // {
    //     // Fetch all Jadwalkuliah records from the database
    //     $matkuls = Matakuliah::all();

    //     // Return the view with the Jadwalkuliah data
    //     return view('kpBuatJadwal', compact('matkuls'));
    // }
    
    public function index2()
    {
        // Get the total number of room submissions
        $totaljadwalkuliah = Jadwalkuliah::count();

        // Get the number of approved room submissions
        $approvedjadwalkuliah = Jadwalkuliah::where('status', 'Approved')->count();

        // Pass the data to the view
        return view('dekanDashboard', compact('totalJadwalkuliah', 'approvedJadwalkuliah'));
    }

    public function showTotalJadwalkuliah()
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


    public function dashboard()
    {
        // Fetch the count of all Jadwalkuliah records
        $totalpengajuanjadwalkuliah = Jadwalkuliah::count();

        // Pass the count to the view
        return view('baDashboard', compact('totalPengajuanJadwalkuliah'));
    }

    public function approve(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required'
        ]);
    
        // Update 'Pending' status to 'Disetujui'
        Jadwalkuliah::where('kode_mk', $request->kode_mk)
            ->where('status', 'Pending')
            ->update(['status' => 'Approved']);
    
        return response()->json(['message' => 'Jadwal has been approved for ' . $request->kode_mk]);
    }

    public function approveAll()
    {
        // Update all 'Pending' Jadwal entries to 'Approved'
        Jadwalkuliah::where('status', 'Pending')->update(['status' => 'Approved']);

        // Return a JSON response or redirect with a success message
        return response()->json(['message' => 'All pending Jadwal have been approved.']);
    }


    public function reject(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required'
        ]);
    
        // Update 'Pending' status to 'Disetujui'
        Jadwalkuliah::where('kode_mk', $request->kode_mk)
            ->where('status', 'Pending')
            ->update(['status' => 'Rejected']);
    
        return response()->json(['message' => 'Jadwal has been approved for ' . $request->kode_mk]);
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
            'kelas' => 'required|string|max:1', // Nomor kelas
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
        // dd($data);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Jadwalkuliah berhasil ditambahkan!');
    }

    // Hapus mata kuliah
    public function destroy($id)
    {
        $jadwalkuliah = Jadwalkuliah::findOrFail($id);
        $jadwalkuliah->delete();

        return redirect()->back()->with('success', 'Jadwal berhasil dihapus!');
    }

    public function pilihJadwalKuliah()
    {
        // Fetch all Jadwalkuliah records from the database
        $jadwalkuliahs = Jadwalkuliah::all();
        $approvedjadwals = JadwalKuliah::where('status', 'Approved')->get();
        $matkuls = Matakuliah::all();

        // Return the view with the Jadwalkuliah data
        return view('kpBuatJadwal', compact('jadwalkuliahs', 'approvedRuangs', 'matkuls'));
    }

    public function showApprovedJadwalKuliahirs()
    {
    // Mengambil semua data Jadwalkuliah yang sudah disetujui
    $approvedJadwalkuliahirs = Jadwalkuliah::where('status', 'Approved')->get();

    // Mengirimkan data ke view 'buatIRSMhs'
    return view('buatIRSMhs', compact('approvedJadwalkuliahirs'));
    }
    
}

