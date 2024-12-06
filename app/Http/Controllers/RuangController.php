<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{


    public function index()
    {
        // Fetch all ruang records from the database
        $totalRuang = Ruang::count();

        $approvedRuang = Ruang::where('status', 'Approved')->count();        

        // Return the view with the ruang data
        return view('baDashboard', compact('totalRuang', 'approvedRuang'));
    }
    public function buatRuang()
    {
        // Fetch all ruang records from the database
        $ruangs = Ruang::all();

        // Return the view with the ruang data
        return view('baBuatRuang', compact('ruangs'));
    }

    public function showRuangForApproval()
    {
        // Get all ruang that are pending approval (status = "Pending")
        $data = Ruang::all();

        // Pass the data to the view
        return view('dekanPersetujuanRuang', compact('data'));
    }

    public function index2()
    {
        // Get the total number of room submissions
        $totalRuang = Ruang::count();

        // Get the number of approved room submissions
        $approvedRuang = Ruang::where('status', 'Approved')->count();

        // Pass the data to the view
        return view('dekanDashboard', compact('totalRuang', 'approvedRuang'));
    }


    /**
     * Approve the room.
     */
    public function approveRuang($id)
    {
        $ruang = Ruang::findOrFail($id);
        $ruang->status = 'Approved'; // Setujui ruang
        $ruang->save();

        // Perbarui jumlah pengajuan yang disetujui
        $approvedCount = Ruang::where('status', 'Approved')->count();

        // Kembali ke halaman persetujuan dengan notifikasi
        return redirect()->route('ruang.approval')->with('success', 'Ruang disetujui! Jumlah pengajuan yang disetujui: ' . $approvedCount);
    }

    /**
     * Reject the room.
     */
    public function rejectRuang($id)
    {
        $ruang = Ruang::findOrFail($id);
        $ruang->status = 'Rejected'; // Tolak ruang
        $ruang->save();

        // Kembali ke halaman persetujuan dengan notifikasi
        return redirect()->route('ruang.approval')->with('error', 'Ruang ditolak!');
    }

    

    public function dashboard()
    {
        // Fetch the count of all ruang records
        $totalPengajuanRuang = Ruang::count();

        // Pass the count to the view
        return view('baDashboard', compact('totalPengajuanRuang'));
    }

    
    /**
     * Store a newly created resource in the database.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'no_ruang' => 'required|string|max:10',
            'blok_gedung' => 'required|string|max:1',
            'lantai' => 'required|integer|min:1',
            'kapasitas' => 'required|integer|min:1',
            'keperluan' => 'required|string|max:255',
        ]);

        // Create a new Ruang record and save it to the database
        $data = [
            'no_ruang' => $request->input('no_ruang'),
            'blok_gedung' => $request->input('blok_gedung'),
            'lantai' => $request->input('lantai'),
            'kapasitas' => $request->input('kapasitas'),
            'keperluan' => $request->input('keperluan'),
            'status' => 'Pending',
        ];
        Ruang::create($data);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Ruang berhasil ditambahkan!');
    }
}
