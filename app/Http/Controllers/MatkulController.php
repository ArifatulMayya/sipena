<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
     // Menampilkan halaman dan data mata kuliah
     public function index()
     {
         $matkul = Matakuliah::all(); // Ambil semua data dari tabel matkul
         return view('kpKelolaMatkul', compact('matkul')); // Kirim data ke view
     }
 
     // Menyimpan data mata kuliah
     public function store(Request $request)
     {
         $request->validate([
             'kode_mk' => 'required|unique:mata_kuliah,kode_mk',
             'nama_mk' => 'required',
             'sks' => 'required|integer|min:1|max:6',
             'sifat' => 'required',
             'smt' => 'required|integer',
         ]);
 
         Matakuliah::create([
             'kode_mk' => $request->kode_mk,
             'nama_mk' => $request->nama_mk,
             'sks' => $request->sks,
             'sifat' => $request->sifat,
             'smt' => $request->smt,
         ]);
 
         return redirect()->route('kpKelolaMatkul')->with('success', 'Mata kuliah berhasil ditambahkan!');
     }

     // Menampilkan form edit mata kuliah
    public function edit($id)
    {
        $matkul = Matakuliah::findOrFail($id); // Ambil data mata kuliah berdasarkan ID
        return view('editMatkul', compact('matkul')); // Kirim data ke view edit
    }

    // Update data mata kuliah
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_mk' => 'required|unique:matkul,kode_mk,' . $id,
            'nama_mk' => 'required',
            'sks' => 'required|integer|min:1|max:6',
            'sifat' => 'required',
            'smt' => 'required|integer',
        ]);

        $matkul = Matakuliah::findOrFail($id);
        $matkul->update([
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
            'sifat' => $request->sifat,
            'smt' => $request->smt,
        ]);

        return redirect()->route('kpKelolaMatkul')->with('success', 'Mata kuliah berhasil diperbarui!');
    }

    // Hapus mata kuliah
    public function destroy($id)
    {
        $matkul = Matakuliah::findOrFail($id);
        $matkul->delete();

        return redirect()->route('kpKelolaMatkul')->with('success', 'Mata kuliah berhasil dihapus!');
    }
}
