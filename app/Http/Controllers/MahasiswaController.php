<?php

namespace App\Http\Controllers;

use App\Models\Irs;
use App\Models\Dosen;
use App\Models\ChooseIrs;
use App\Models\Mahasiswa;
use App\Models\Jadwalkuliah;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //untuk page dosen bimbingan
    public function index(){
        
        $mahasiswa=Mahasiswa::where('nip_doswal',$user->nim_nip)->paginate(8);
        $sort=null;
        return view('dosenBimbingan',compact('mahasiswa','sort'));
    }

    public function urutkan(Request $request){
        //cek parameter sort diterima
        $user = auth()->user();
        $sort=$request->get('sort','asc');
        $mahasiswa=Mahasiswa::where('nip_doswal',$user->nim_nip)->orderBy('nim',$sort)->paginate(8);
        return view('dosenBimbingan',compact('mahasiswa','sort'));
    }

    public function cari(Request $request){
        $search=$request->get('search');
        $sort=$request->get('sort','asc');
        $user = auth()->user();
        $mahasiswa = Mahasiswa::where('nip_doswal',$user->nim_nip)->where('nama', 'like', "%{$search}%")
        ->orWhere('nim', 'like', "%{$search}%")
        ->orderBy('nim', $sort)
        ->paginate(8);

        $mahasiswa->appends(['search'=>$search,'sort']);
        return view('dosenBimbingan',compact('mahasiswa','sort','search')); 
    }
    
        //untuk page dosenpengajuanirs
    public function index1(){

        $user = auth()->user();
        $mahasiswa=Mahasiswa::where('nip_doswal',$user->nim_nip)->paginate(8);
        $sort=null;

        foreach($mahasiswa as $mhs){
            $mhs->irs = ChooseIrs::where('nim',$mhs->nim)->get();
            //check if irs with nim = $mhs->nim is all apprroved return true, if not return false
            $mhs->isPending = false;
            foreach($mhs->irs as $irs){
                if($irs->status == 'Pending'){
                    $mhs->isPending = true;
                }
            }

            $mhs->nip_doswal = Mahasiswa::where('nim',$mhs->nim)->first()->nip_doswal;
            $mhs->nama_doswal = Dosen::where('nip',$mhs->nip_doswal)->first()->nama;

            foreach($mhs->irs as $jadwal){
                $jadwal->nama_mk = Jadwalkuliah::where('kode_mk',$jadwal->kode_mk)->first()->nama_mk;
                $jadwal->sks = Jadwalkuliah::where('kode_mk',$jadwal->kode_mk)->first()->sks;
                $jadwal->status = 'Baru';
                $jadwal->jam = Jadwalkuliah::where('id',$jadwal->jadwal_kuliah_id)->first()->wkt_mulai.' - '.Jadwalkuliah::where('id',$jadwal->jadwal_kuliah_id)->first()->wkt_selesai;
                $jadwal->hari = Jadwalkuliah::where('id',$jadwal->jadwal_kuliah_id)->first()->hari;
                $jadwal->ruang = Jadwalkuliah::where('id',$jadwal->jadwal_kuliah_id)->first()->nama_ruang;
                $jadwal->kelas = Jadwalkuliah::where('id',$jadwal->jadwal_kuliah_id)->first()->kelas;
            }
        }

    

        // dd($mahasiswa);
        return view('dosenPengajuanIRS',compact('mahasiswa','sort'));
    }
    public function urutkan1(Request $request){
        //cek parameter sort diterima
        $user = auth()->user();
        $sort=$request->get('sort','asc');
        $mahasiswa=Mahasiswa::where('nip_doswal',$user->nim_nip)->orderBy('nim',$sort)->paginate(8);
        return view('dosenPengajuanIRS',compact('mahasiswa','sort'));
    }

    public function cari1(Request $request){
        $search=$request->get('search');
        $sort=$request->get('sort','asc');
        $user = auth()->user();

        $mahasiswa = Mahasiswa::where('nip_doswal',$user->nim_nip)->where('nama', 'like', "%{$search}%")
        ->orWhere('nim', 'like', "%{$search}%")
        ->orderBy('nim', $sort)
        ->paginate(8);

        $mahasiswa->appends(['search'=>$search,'sort']);
        return view('dosenPengajuanIRS',compact('mahasiswa','sort','search')); 
    }

    public function pengajuanIrs(){
        $user = auth()->user();
        // Menghitung jumlah pengajuan IRS
        $jumlahPengajuan = Mahasiswa::where('nip_doswal',$user->nim_nip)->count();
        $irsDisetujui = Irs::where('status', 'Disetujui')->count();
        
        // Kirim variabel jumlahPengajuan ke view dashboardPA
        return view('dashboardPA', compact('jumlahPengajuan','irsDisetujui'));  
    }
    
    public function printIrs($id) {
        $user = auth()->user();
        $mahasiswa = Mahasiswa::where('nip_doswal',$user->nim_nip)->find($id);
        return view('print-irs', compact('mahasiswa'));
    }
    
    public function perkembanganstudi(Request $request){
        $nim=$request->query('nim');
        $nama=$request->query('nama');
        return view('studi',compact('nim','nama'));
    }
    
}
