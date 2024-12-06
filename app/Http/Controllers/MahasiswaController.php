<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa=Mahasiswa::paginate(8);
        $sort=null;
        return view('dosenBimbingan',compact('mahasiswa','sort'));
    }

    public function urutkan(Request $request){
        //cek parameter sort diterima
        $sort=$request->get('sort','asc');
        $mahasiswa=Mahasiswa::orderBy('nim',$sort)->paginate(8);
        return view('dosenBimbingan',compact('mahasiswa','sort'));
    }

    public function cari(Request $request){
        $search=$request->get('search');
        $sort=$request->get('sort','asc');

        $mahasiswa = Mahasiswa::where('nama', 'like', "%{$search}%")
        ->orWhere('nim', 'like', "%{$search}%")
        ->orderBy('nim', $sort)
        ->paginate(8);

        $mahasiswa->appends(['search'=>$search,'sort']);
        return view('dosenBimbingan',compact('mahasiswa','sort','search')); 
    }
}
