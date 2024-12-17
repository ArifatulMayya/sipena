<?php
namespace App\Http\Controllers;

use App\Models\HistoryIrs;
use App\Models\Mahasiswa; 
use Illuminate\Http\Request;
use App\Models\Irs; // Pastikan model IRS sudah ada

class IRSController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        \Log::info('Request data:', $request->all());

        $validated = $request->validate([
            'nim' => 'required|string',
            'semester' => 'required|integer',
            'tahun_ajaran' => 'required|string',
            'status' => 'required|string',
        ]);
    
        $irs = new Irs();
        $irs->nim = $validated['nim'];
        $irs->semester = $validated['semester'];
        $irs->tahun_ajaran = $validated['tahun_ajaran'];
        $irs->status = $validated['status'];
    
        try {
            $irs->save();
            return response()->json(['success' => true, 'message' => 'IRS berhasil disetujui']);
        } catch (\Exception $e) {
            \Log::error('Error saving IRS:', ['error' => $e->getMessage()]);
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan saat menyimpan data'], 500);
        }
    }
    public function buatIrs()
    {
        // // Get the total number of room submissions
        // $totaljadwalkuliah = Jadwalkuliah::count();

        // // Get the number of approved room submissions
       // $approvedjadwalkuliah = Jadwalkuliah::where('status', 'Approved')->count();

        // Pass the data to the view
        return view('dashboardMhs');
    }

    public function showDetail($nim, $semester)
    {
        // Ambil data mahasiswa berdasarkan NIM
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        
        if (!$mahasiswa) {
            abort(404, 'Mahasiswa tidak ditemukan');
        }
    
        // Ambil data IRS berdasarkan NIM dan semester
        $dataIRS = HistoryIrs::where('nim', $nim)
                             ->where('semester', $semester)
                             ->get();
    
        // Hitung total SKS
        $totalSKS = $dataIRS->sum('sks');
    
        // Hitung total nilai SKS
        $totalNilaiSKS = $dataIRS->sum(function ($item) {
            return $item->sks * $item->nilai;
        });
    
        // Hitung IP Semester
        $ipSemester = ($totalSKS > 0) ? $totalNilaiSKS / $totalSKS : 0;
    
        // Kirim variabel ke view
        return view('isi-irsMhs', compact('mahasiswa', 'dataIRS', 'semester', 'totalSKS', 'ipSemester'));
    }
    public function showDetail2($nim, $semester)
    {
        // Ambil data mahasiswa berdasarkan NIM
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();
        
        if (!$mahasiswa) {
            abort(404, 'Mahasiswa tidak ditemukan');
        }
    
        // Ambil data IRS berdasarkan NIM dan semester
        $dataIRS = HistoryIrs::where('nim', $nim)
                             ->where('semester', $semester)
                             ->get();
    
        // Hitung total SKS
        $totalSKS = $dataIRS->sum('sks');
    
        // Hitung total nilai SKS
        $totalNilaiSKS = $dataIRS->sum(function ($item) {
            return $item->sks * $item->nilai;
        });
    
        // Hitung IP Semester
        $ipSemester = ($totalSKS > 0) ? $totalNilaiSKS / $totalSKS : 0;
    
        // Kirim variabel ke view
        return view('irsMhs', compact('mahasiswa', 'dataIRS', 'semester', 'totalSKS', 'ipSemester'));
    }


}

?>
