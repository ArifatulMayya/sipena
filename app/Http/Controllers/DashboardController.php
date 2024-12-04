<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexpa() {
        return view('dashboardPA');
    }
    public function indexmhs() {
        return view('dashboardMhs');
    }
    public function indexba() {
        // Fetch all ruang records from the database
        $totalRuang = Ruang::all();

        $approvedRuang = Ruang::where('status', 'Approved')->count();        

        // Return the view with the ruang data
        return view('baDashboard', compact('totalRuang', 'approvedRuang'));
    }
    public function indexdekan() {
        // Get the total number of room submissions
        $totalRuang = Ruang::count();

        // Get the number of approved room submissions
        $approvedRuang = Ruang::where('status', 'Approved')->count();

        // Pass the data to the view
        return view('dekanDashboard', compact('totalRuang', 'approvedRuang'));
    }
    public function indexkaprodi() {
        return view('kpDashboard');
    }
}
