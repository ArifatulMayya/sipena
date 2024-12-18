<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Dosen;
use App\Models\ChooseIrs;
use App\Models\HistoryIrs;
use App\Models\Mahasiswa; 
use App\Models\Matakuliah;
use App\Models\Jadwalkuliah;
use Illuminate\Http\Request;
use App\Models\Irs; // Pastikan model IRS sudah ada

use function PHPUnit\Framework\isNull;

class IRSController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $irs = HistoryIrs::select('semester')->where('nim', $user->nim_nip)->groupBy('semester')->get();

        foreach($irs as $i){
            $i->totalSKS = HistoryIrs::where('nim', $user->nim_nip)->where('semester', $i->semester)->sum('sks');
        }

        // dd($irs);
        // Pass the data to
        return view('irsMhs', compact('irs', 'user'));  
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

        $mahasiswa->nama_doswal = Dosen::where('nip', $mahasiswa->nip_doswal)->first()->nama;
        
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


    public function indexBuatIRS(){

        $jadwals = Jadwalkuliah::all();

        $data = Jadwalkuliah::select('kode_mk')->groupBy('kode_mk')->get();

        $email = auth()->user()->email;
        $user = auth()->user();
        $mhs = Mahasiswa::where('nim', $user->nim_nip)->first();

        foreach($data as $d){
            $d->matakuliah = Matakuliah::where('kode_mk', $d->kode_mk)->first()->nama_mk;
            $d->sks = Matakuliah::where('kode_mk', $d->kode_mk)->first()->sks;
            $d->kelas = Jadwalkuliah::where('kode_mk', $d->kode_mk)->get();
            $d->semester = Matakuliah::where('kode_mk', $d->kode_mk)->first()->plotsemester;
            foreach($d->kelas as $k){
                $k->isselected = ChooseIrs::where('user_id', $user->id)->where('jadwal_kuliah_id', $k->id)->where('kode_mk', $d->kode_mk)->first() ? true : false;
                $k->jam = $k->wkt_mulai . ' - ' . $k->wkt_selesai; 
            }

        }

        $picked = ChooseIrs::where('user_id', $user->id)->get();
        $total = 0;
        foreach($picked as $p){
            $total += Matakuliah::where('kode_mk', $p->kode_mk)->first()->sks;
        }

        //Batas SKS
        //check is melebihi batas sks
        $batas_sks = 0;

        $dataIRS = HistoryIrs::where('nim', $user->nim_nip)
                             ->where('semester', ($mhs->semester)-1)
                             ->get();
    
        // Hitung total SKS
        $totalSKS = $dataIRS->sum('sks');
    
        // Hitung total nilai SKS
        $totalNilaiSKS = $dataIRS->sum(function ($item) {
            return $item->sks * $item->nilai;
        });
    
        // Hitung IP Semester
        $ipSemester = ($totalSKS > 0) ? $totalNilaiSKS / $totalSKS : 0;

        $ipSemester = $mhs->ips;

        if($ipSemester >= 3.0){
            $batas_sks = 24;
        }else if($ipSemester < 3 && $ipSemester >=2.5){
            $batas_sks = 22;
        }else if($ipSemester < 2.5 && $ipSemester >=2.0){
            $batas_sks = 20;
        }else{
            $batas_sks = 18;
        }



        // dd($data);
        // dd($jadwals);

        $irsselesai = env('IRS_SELESAI');
        $givenDate = Carbon::parse($irsselesai);
        $twoWeeksAgo = Carbon::now()->subWeeks(2);  
        $fourWeeksAgo = Carbon::now()->subWeeks(4);


        if($mhs->akses_irs == 'buka'){

            //jika kurang dari 2 minggu dari givendate maka masih bisa buat irs
            if($givenDate->gt($twoWeeksAgo)){
                return view('buatIRSMhs', compact('jadwals', 'data','email','total','batas_sks'));
            }else{
                return view('IrsBatalOnlyMhs', compact('jadwals', 'data','email','total','batas_sks'));
            }
            

        } else{
            return view('IrsDitutup');
        }

    }

    public function createIRS(Request $request)
    {

        
        $jadwaldipilih = Jadwalkuliah::where('id', $request->jadwal_id)->first();
        
        $user = auth()->user();
        
        $mhs = Mahasiswa::where('nim', $user->nim_nip)->first();

        //change mhs semester to string php
        $sem = (string)$mhs->semester;
        
        $data = [
            'user_id' => $user->id,
            'jadwal_kuliah_id' => $request->jadwal_id,
            'status' => 'Pending',
            'kode_mk' => $jadwaldipilih->kode_mk,
            'nim' => $mhs->nim,
            'semester_ambil' => $sem
        ];

        //check is melebihi batas sks
        $ipSemester = $mhs->ips;

        if($ipSemester >= 3.0){
            $batas_sks = 24;
        }else if($ipSemester < 3 && $ipSemester >=2.5){
            $batas_sks = 22;
        }else if($ipSemester < 2.5 && $ipSemester >=2.0){
            $batas_sks = 20;
        }else{
            $batas_sks = 18;
        }

        $check = ChooseIrs::where('user_id', $data['user_id'])->where('kode_mk', $data['kode_mk'])->first();

        //sum of sks selected irs
        $picked = ChooseIrs::where('user_id', $user->id)->where('semester_ambil',$mhs->semester)->get();
        $total = 0;
        foreach($picked as $p){
            $total += Matakuliah::where('kode_mk', $p->kode_mk)->first()->sks;
        }

        $matkulmasuk = Matakuliah::where('kode_mk', $data['kode_mk'])->first()->sks;

        $isMelewati = ($total + $matkulmasuk) > $batas_sks;
        // return response()->json(['data' => $batas_sks]);
        
        if($isMelewati){
            return response()->json(['error' => 'Sks melebihi batas'],422);
        }



        
        
        
        // return response()->json(['data' => $check]);
        if($check) {
            $check->update($data);
        }else{

            ChooseIrs::create($data);
            // return response()->json(['data' => $data]);
        }

        $picked = ChooseIrs::where('user_id', $user->id)->get();
        $total = 0;
        foreach($picked as $p){
            $total += Matakuliah::where('kode_mk', $p->kode_mk)->first()->sks;
        }

        $data['sks'] = $total;



        return response()->json(['data' => $data]);






    }

    public function viewIrs()
    {
        $user = auth()->user();
        $data = ChooseIrs::where('user_id', $user->id)->get();

        foreach ($data as $d) {
            $d->nama = Matakuliah::where('kode_mk', $d->kode_mk)->first()->nama_mk;
            $d->semester = Matakuliah::where('kode_mk', $d->kode_mk)->first()->smt;
            $d->sks = Matakuliah::where('kode_mk', $d->kode_mk)->first()->sks;
        }


        return response()->json($data);
    }

    public function deleteIrs(Request $request) {

        $request->validate(['id' => 'required']);

        $id = $request->id;
        $data = ChooseIrs::find($id);

        // return response()->json(['data' => $data]);

        $kodejadwal = $data->jadwal_kuliah_id;
        $data->delete();


        $user = auth()->user();

        $picked = ChooseIrs::where('user_id', $user->id)->get();
        $total = 0;
        foreach($picked as $p){
            $total += Matakuliah::where('kode_mk', $p->kode_mk)->first()->sks;
        }


        
        
        return response()->json(['kodejadwal' => $kodejadwal,'sks' => $total]);
    }

    public function approveIRS(Request $request)
    {

        
        // return response()->json($request->all());
        $pendingEntries = ChooseIrs::where('nim', $request->nim)
        ->where('status', 'Pending')
        ->get();
        
        $mhs = Mahasiswa::where('nim', $request->nim)->first();
            
        foreach ($pendingEntries as $entry) {
            $jadwal = Jadwalkuliah::where('id', $entry->jadwal_kuliah_id)->first();

            $matakuliah = Matakuliah::where('kode_mk', $entry->kode_mk)->first();

                // Insert into the IRS table
                HistoryIrs::create([
                    'nim' => $mhs->nim,
                    'semester' => $mhs->semester,
                    'kode_mk' => $entry->kode_mk,
                    'nama_mk' => $jadwal->nama_mk,
                    'sks' => $jadwal->sks,
                    'kelas' => $jadwal->kelas,
                    'nama_ruang' => $jadwal->nama_ruang,
                    'hari' => $jadwal->hari,
                    'wkt_mulai' => $jadwal->wkt_mulai,
                    'wkt_selesai' => $jadwal->wkt_selesai,
                    'nilai' => 0
                ]);
    
            // Update the IRSTEST entry to 'Disetujui'
            $entry->update(['status' => 'Disetujui']);
        }

        // Prevent further access to IRS for the approved student
        Mahasiswa::where('nim', $request->nim)->update(['akses_irs' => 'tutup']);

        return response()->json(['success' => true, 'message' => 'IRS berhasil disetujui']);
    }


    public function rejectIRS(Request $request)
    {
        $pendingEntries = ChooseIrs::where('nim', $request->nim)
        ->where('status', 'Pending')
        ->get();
        
        foreach ($pendingEntries as $entry) {
            $entry->update(['status' => 'Ditolak']);
        }

        return response()->json(['success' => true, 'message' => 'IRS berhasil ditolak']);
    }


    public function approveAll(){

        $user = auth()->user();
        $semuaMahasiswa = Mahasiswa::where('nip_doswal',$user->nim_nip)->get();

        foreach($semuaMahasiswa as $mhs){
            $pendingEntries = ChooseIrs::where('nim', $mhs->nim)
            ->where('status', 'Pending')
            ->get();
            
            foreach ($pendingEntries as $entry) {
                $jadwal = Jadwalkuliah::where('id', $entry->jadwal_kuliah_id)->first();
    
                $matakuliah = Matakuliah::where('kode_mk', $entry->kode_mk)->first();
    
                    // Insert into the IRS table
                    HistoryIrs::create([
                        'nim' => $mhs->nim,
                        'semester' => $mhs->semester,
                        'kode_mk' => $entry->kode_mk,
                        'nama_mk' => $jadwal->nama_mk,
                        'sks' => $jadwal->sks,
                        'kelas' => $jadwal->kelas,
                        'nama_ruang' => $jadwal->nama_ruang,
                        'hari' => $jadwal->hari,
                        'wkt_mulai' => $jadwal->wkt_mulai,
                        'wkt_selesai' => $jadwal->wkt_selesai,
                        'nilai' => 0
                    ]);
        
                // Update the IRSTEST entry to 'Disetujui'
                $entry->update(['status' => 'Disetujui']);
            }
        }

        return response()->json(['success' => true, 'message' => 'Semua IRS berhasil disetujui']);
    }


    public function aksesIRS(){

        $user = auth()->user();
        $mahasiswa = Mahasiswa::where('nip_doswal',$user->nim_nip)->get();

        // dd($mahasiswa);

        return view('dosenAksesIRS', compact('mahasiswa'));

    }

    public function bukatutupIRS(Request $request){

        // return response()->json($request->all());

        $mhs = Mahasiswa::where('nim',$request->nim)->first();

        $mhs->update(['akses_irs' => $request->status]);

        return response()->json($mhs);




        return response()->json(['success' => true, 'message' => 'Status IRS berhasil diubah']);
    }


}

?>
