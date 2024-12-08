<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use App\Models\JadwalKuliah;
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
        // Get the total number of room submissions
        $totalJadwal = Jadwalkuliah::count();

        // Get the number of approved room submissions
        $approvedRuang = Ruang::where('status', 'Approved')->count();
        $approvedJadwal = JadwalKuliah::where('status', 'Approved')->count();

        // Pass the data to the view
        return view('dekanDashboard', compact('totalRuang', 'totalJadwal','approvedRuang','approvedJadwal'));
    }


    /**
     * Approve the room.
     */
    public function approveRuang(Request $request)
    {
        $request->validate([
            'no_ruang' => 'required'
        ]);
    
        // Update 'Pending' status to 'Disetujui'
        Ruang::where('no_ruang', $request->no_ruang)
            ->where('status', 'Pending')
            ->update(['status' => 'Approved']);
    
        return response()->json(['message' => 'Jadwal has been approved for ' . $request->kode_mk]);
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
            'prodi' => 'required|string|min:1|max:20',
            'kapasitas' => 'required|integer|min:1',
            'keperluan' => 'required|string|max:255',
        ]);


         // Cek apakah ruang sudah ada di database
            $existingRoom = Ruang::where('no_ruang', $request->no_ruang)->first();

            if ($existingRoom) {
                // Jika ruang sudah ada, cek apakah prodi berbeda
                if ($existingRoom->prodi !== $request->prodi) {
                    // Jika prodi berbeda, tampilkan pesan error dan jangan simpan data
                    return redirect()->route('ruang.buatRuang')->with('error', 'Ruang ini sudah dipakai oleh prodi lain!');
                } else {
                    // Jika ruang dan prodi sama, tampilkan pesan error
                    return redirect()->route('ruang.buatRuang')->with('error', 'Data sudah ada dalam database!');
                }
            }

            // Jika tidak ada duplikasi atau masalah lain, simpan data baru
            // Menyimpan data baru ke dalam array
            $data = [
                'no_ruang' => $request->input('no_ruang'),
                'blok_gedung' => $request->input('blok_gedung'),
                'lantai' => $request->input('lantai'),
                'prodi' => $request->input('prodi'),
                'kapasitas' => $request->input('kapasitas'),
                'keperluan' => $request->input('keperluan'),
                'status' => 'Pending',  // Default status
            ];

            // Simpan data ke database hanya jika tidak ada masalah
            Ruang::create($data);

            // Redirect dengan pesan sukses setelah data disimpan
            return redirect()->route('ruang.buatRuang')->with('success', 'Ruang berhasil ditambahkan!');
        }

        // Hapus mata kuliah
        public function destroy($id)
        {
            $ruang = Ruang::findOrFail($id);
            $ruang->delete();

            return redirect()->route('ruang.buatRuang')->with('success', 'Mata kuliah berhasil dihapus!');
        }
     }

        // Redirect back with a success message
        //return redirect()->back()->with('success', 'Ruang berhasil ditambahkan!'

