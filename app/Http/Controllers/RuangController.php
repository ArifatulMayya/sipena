<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{

    public function index()
    {
        // Fetch all ruang records from the database
        $ruangs = Ruang::all();

        // Return the view with the ruang data
        return view('baBuatRuang', compact('ruangs'));
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
        ];
        Ruang::create($data);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Ruang berhasil ditambahkan!');
    }
}
