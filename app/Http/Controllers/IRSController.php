<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Irs; 

class IRSController extends Controller
{

    public function __construct()
    {
    $this->middleware('auth');
    }

   public function buatIRSMhs(Request $request)
{
    $validated = $request->validate([
        'jadwal_id' => 'required|exists:jadwal_kuliahs,id',
        'user_id' => 'required|exists:users,id',
    ]);

    $jadwal = JadwalKuliah::find($request->jadwal_id);
    $user = User::find($request->user_id);

    // Example logic to add to IRS, adjust based on your model relationships
    $irs = new IRS();
    $irs->user_id = $user->id;
    $irs->jadwal_kuliah_id = $jadwal->id;
    $irs->save();

    return response()->json([
        'message' => 'Schedule added to IRS successfully!',
        'jadwal' => $jadwal
    ]);
}



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
            Log::error('Error saving IRS:', ['error' => $e->getMessage()]);
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan saat menyimpan data'], 500);
        }
    }

    
    // public function buatIRSMhs()
    // {
    //     // // Get the total number of room submissions
    //     // $totaljadwalkuliah = Jadwalkuliah::count();
    //     // Get the number of approved room submissions
    //     $approvedjadwalkuliah = JadwalKuliah::where('status', 'Approved')->count();

    //     // Pass the data to the view
    //     return view('buatIRSMhs');
    // }

}

?>
