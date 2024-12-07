<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalkuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jadwalKuliahData = [
            [
                'kode_mk' => 'PAIK6102', 'nama_mk' => 'Dasar Pemrograman', 'kelas' => 'A', 'hari' => 'Senin',
                'nama_ruang' => 'A101', 'sks' => 3, 'sifat' => 'Wajib', 'wkt_mulai' => '08:00:00', 
                'wkt_selesai' => '10:00:00', 'kuota' => '30',
            ],
            [
                'kode_mk' => 'PAIK6105', 'nama_mk' => 'Struktur Diskrit', 'kelas' => 'B', 'hari' => 'Selasa',
                'nama_ruang' => 'E102', 'sks' => 4, 'sifat' => 'Wajib', 'wkt_mulai' => '10:00:00', 
                'wkt_selesai' => '12:00:00', 'kuota' => '30',
            ],
            [
                'kode_mk' => 'PAIK6104', 'nama_mk' => 'Logika Informatika', 'kelas' => 'C', 'hari' => 'Rabu',
                'nama_ruang' => 'C103', 'sks' => 4, 'sifat' => 'Wajib', 'wkt_mulai' => '13:00:00', 
                'wkt_selesai' => '15:00:00', 'kuota' => '30',
            ],
            [
                'kode_mk' => 'PAIK6101', 'nama_mk' => 'Matematika I', 'kelas' => 'A', 'hari' => 'Kamis',
                'nama_ruang' => 'K104', 'sks' => 2, 'sifat' => 'Wajib', 'wkt_mulai' => '08:00:00', 
                'wkt_selesai' => '10:00:00', 'kuota' => '25',
            ],
            [
                'kode_mk' => 'PAIK6103', 'nama_mk' => 'Dasar Sistem', 'kelas' => 'B', 'hari' => 'Jumat',
                'nama_ruang' => 'D105', 'sks' => 3, 'sifat' => 'Wajib', 'wkt_mulai' => '10:00:00', 
                'wkt_selesai' => '12:00:00', 'kuota' => '30',
            ],
            [
                'kode_mk' => 'UUW00007', 'nama_mk' => 'Bahasa Inggris', 'kelas' => 'C', 'hari' => 'Senin',
                'nama_ruang' => 'E106', 'sks' => 2, 'sifat' => 'Pilihan', 'wkt_mulai' => '13:00:00', 
                'wkt_selesai' => '15:00:00', 'kuota' => '20',
            ],
            [
                'kode_mk' => 'UUW00005', 'nama_mk' => 'Olahraga', 'kelas' => 'A', 'hari' => 'Selasa',
                'nama_ruang' => 'F107', 'sks' => 1, 'sifat' => 'Pilihan', 'wkt_mulai' => '08:00:00', 
                'wkt_selesai' => '09:00:00', 'kuota' => '40',
            ],
            [
                'kode_mk' => 'UUW00003', 'nama_mk' => 'Pancasila dan Kewarganegaraan', 'kelas' => 'B', 'hari' => 'Rabu',
                'nama_ruang' => 'A108', 'sks' => 3, 'sifat' => 'Wajib', 'wkt_mulai' => '10:00:00', 
                'wkt_selesai' => '12:00:00', 'kuota' => '30',
            ],
            [
                'kode_mk' => 'UUW00004', 'nama_mk' => 'Bahasa Indonesia', 'kelas' => 'A', 'hari' => 'Kamis',
                'nama_ruang' => 'B109', 'sks' => 2, 'sifat' => 'Wajib', 'wkt_mulai' => '13:00:00', 
                'wkt_selesai' => '15:00:00', 'kuota' => '25',
            ],
            [
                'kode_mk' => 'UUW00011', 'nama_mk' => 'Pendidikan Agama', 'kelas' => 'C', 'hari' => 'Jumat',
                'nama_ruang' => 'F110', 'sks' => 2, 'sifat' => 'Pilihan', 'wkt_mulai' => '08:00:00', 
                'wkt_selesai' => '10:00:00', 'kuota' => '30',
            ],
        ];

        // Insert data into the 'jadwalkuliah' table
        foreach ($jadwalKuliahData as $data) {
            DB::table('jadwalkuliah')->insert([
                'kode_mk' => $data['kode_mk'],
                'nama_mk' => $data['nama_mk'],
                'kelas' => $data['kelas'],
                'hari' => $data['hari'],
                'nama_ruang' => $data['nama_ruang'],
                'sks' => $data['sks'],
                'sifat' => $data['sifat'],
                'wkt_mulai' => $data['wkt_mulai'],
                'wkt_selesai' => $data['wkt_selesai'],
                'kuota' => $data['kuota'],
                'status' => 'Approved',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}