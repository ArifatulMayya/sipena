<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryIrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $history_irs=[
            [
                'nim'=>'24060122140179',
                'semester'=> 1,
                'kode_mk'=>'PAIK6012',
                'nama_mk'=>'Dasar Pemrograman',
                'sks'=> 3,
                'kelas'=>'D',
                'nama_ruang'=>'A204',
                'hari'=>'Senin',
                'wkt_mulai'=>'15:40:00',
                'wkt_selesai'=>'18:10:00',
                'nilai'=>4
            ],
            [
                'nim'=>'24060122140179',
                'semester'=> 1,
                'kode_mk'=>'PAIK6101',
                'nama_mk'=>'Matematika I',
                'sks'=> 2,
                'kelas'=>'D',
                'nama_ruang'=>'B201',
                'hari'=>'Selasa',
                'wkt_mulai'=>'13:00:00',
                'wkt_selesai'=>'14:40:00',
                'nilai'=>3
            ],
            [
                'nim'=>'24060122140179',
                'semester'=> 1,
                'kode_mk'=>'UUW00005',
                'nama_mk'=>'Olahraga',
                'sks'=> 1,
                'kelas'=>'B',
                'nama_ruang'=>'Lapangan Undip',
                'hari'=>'Rabu',
                'wkt_mulai'=>'07:00:00',
                'wkt_selesai'=>'07:50:00',
                'nilai'=>4
            ],
            [
                'nim'=>'24060122140179',
                'semester'=> 1,
                'kode_mk'=>'UUW00007',
                'nama_mk'=>'Bahasa Inggris',
                'sks'=> 2,
                'kelas'=>'D',
                'nama_ruang'=>'E101',
                'hari'=>'Rabu',
                'wkt_mulai'=>'08:50:00',
                'wkt_selesai'=>'10:30:00',
                'nilai'=>4
            ],
            [
                'nim'=>'24060122140179',
                'semester'=> 1,
                'kode_mk'=>'UUW00007',
                'nama_mk'=>'Bahasa Inggris',
                'sks'=> 2,
                'kelas'=>'D',
                'nama_ruang'=>'E101',
                'hari'=>'Rabu',
                'wkt_mulai'=>'08:50:00',
                'wkt_selesai'=>'10:30:00',
                'nilai'=>4
            ],
            
        ];

        foreach($history_irs as $hi){
            DB::table('history_irs')->insert([
                'nim' => $hi['nim'],
                'semester' => $hi['semester'],
                'kode_mk' => $hi['kode_mk'],
                'nama_mk' => $hi['nama_mk'],
                'sks' => $hi['sks'],
                'kelas' => $hi['kelas'],
                'nama_ruang' => $hi['nama_ruang'],
                'hari' => $hi['hari'],
                'wkt_mulai' => $hi['wkt_mulai'],
                'wkt_selesai' => $hi['wkt_selesai'],
                'nilai'=>$hi['nilai'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
            
    }
}
