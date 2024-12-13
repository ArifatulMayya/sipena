<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Irs;
use App\Models\Ruang;
use App\Models\Jadwalkuliah;

class DashboardController extends Controller
{

    public function indexpa() {
        $jumlahPengajuan = IRS::where('status', 'Pending')->count();
        $irsDisetujui = IRS::where('status', 'Approved')->count();
        return view('dashboardPA', compact('jumlahPengajuan', 'irsDisetujui'));
    }
    public function indexmhs() {
        return view('dashboardMhs');
    }
    public function indexba() {
        // Fetch all ruang records from the database
        $totalRuang = Ruang::all()->count();

        $approvedRuang = Ruang::where('status', 'Approved')->count();        

        // Return the view with the ruang data
        return view('baDashboard', compact('totalRuang', 'approvedRuang'));
    }
    public function indexdekan() {
        // Get the total number of room submissions
        $totalRuang = Ruang::count();
        $totalJadwal = Jadwalkuliah::all()->count();
        $approvedJadwal = Jadwalkuliah::where('status', 'Approved')->count();

        // Get the number of approved room submissions
        $approvedRuang = Ruang::where('status', 'Approved')->count();

        // Pass the data to the view
        return view('dekanDashboard', compact('totalRuang', 'approvedRuang', 'totalJadwal', 'approvedJadwal'));
    }
    public function indexkaprodi() {
        return view('kpDashboard');
    }

  
}
