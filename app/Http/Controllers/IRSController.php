<?php
namespace App\Http\Controllers;

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
}

?>
