<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mataKuliahData = [
            ['kode_mk' => 'PAIK6102', 'nama_mk' => 'Dasar Pemrograman', 'sks' => 3, 'semester' => 1],
            ['kode_mk' => 'PAIK6105', 'nama_mk' => 'Struktur Diskrit', 'sks' => 4, 'semester' => 1],
            ['kode_mk' => 'PAIK6104', 'nama_mk' => 'Logika Informatika', 'sks' => 4, 'semester' => 1],
            ['kode_mk' => 'PAIK6101', 'nama_mk' => 'Matematika  I', 'sks' => 2, 'semester' => 1],
            ['kode_mk' => 'PAIK6103', 'nama_mk' => 'Dasar Sistem', 'sks' => 3, 'semester' => 1],
            ['kode_mk' => 'UUW00007', 'nama_mk' => 'Bahasa Inggris', 'sks' => 2, 'semester' => 1],
            ['kode_mk' => 'UUW00005', 'nama_mk' =>'Olahraga', 'sks' => 1, 'semester' => 1],
            ['kode_mk' => 'UUW00003', 'nama_mk' => 'Pancasila dan Kewarganegaraan', 'sks' => 3, 'semester' => 1],
            ['kode_mk' => 'UUW00004', 'nama_mk' => 'Bahasa Indonesia', 'sks' => 2, 'semester' => 2],
            ['kode_mk' => 'UUW00011', 'nama_mk' => 'Pendidikan Agama', 'sks' => 2, 'semester' => 2],
            ['kode_mk' => 'PAIK6202', 'nama_mk' => 'Algoritma dan Pemrograman', 'sks' => 4, 'semester' => 2],
            ['kode_mk' => 'PAIK6204', 'nama_mk' => 'Aljabar Linear', 'sks' => 3, 'semester' => 2],
            ['kode_mk' => 'PAIK6203', 'nama_mk' =>'Organisasi dan Arsitektur Komputer', 'sks' => 3, 'semester' => 2],
            ['kode_mk' => 'PAIK6201', 'nama_mk' => 'Matematika II', 'sks' => 2, 'semester' => 2],
            ['kode_mk' => 'UUW00006', 'nama_mk' => 'Internet of Things (IoT)', 'sks' => 2, 'semester' => 2],
            ['kode_mk' => 'PAIK6301', 'nama_mk' => 'Struktur Data', 'sks' => 4, 'semester' => 3],
            ['kode_mk' => 'PAIK6304', 'nama_mk' => 'Metode Numerik', 'sks' => 3, 'semester' => 3],
            ['kode_mk' => 'PAIK6302', 'nama_mk' => 'Sistem Operasi', 'sks' => 3, 'semester' => 3],
            ['kode_mk' => 'PAIK6305', 'nama_mk' => 'Interaksi Manusia dan Komputer', 'sks' => 3, 'semester' => 3],
            ['kode_mk' => 'PAIK6303', 'nama_mk' => 'Basis Data', 'sks' => 4, 'semester' => 3],
            ['kode_mk' => 'PAIK6306', 'nama_mk' => 'Statistika', 'sks' => 2, 'semester' => 3],
            ['kode_mk' => 'PAIK6401', 'nama_mk' => 'Pemrograman Berorientasi Objek', 'sks' => 3, 'semester' => 4],
            ['kode_mk' => 'PAIK6404', 'nama_mk' =>'Grafika dan Komputasi Visual', 'sks' => 3, 'semester' => 4],
            ['kode_mk' => 'PAIK6402', 'nama_mk' => 'Jaringan Komputer', 'sks' => 3, 'semester' => 4],
            ['kode_mk' => 'PAIK6405', 'nama_mk' => 'Rekayasa Perangkat Lunak', 'sks' => 3, 'semester' => 4],
            ['kode_mk' => 'PAIK6403', 'nama_mk' => 'Manajemen Basis Data', 'sks' => 3, 'semester' => 4],
            ['kode_mk' => 'PAIK6406', 'nama_mk' => 'Sistem Cerdas', 'sks' => 3, 'semester' => 4],
            ['kode_mk' => 'PAIK6503', 'nama_mk' => 'Sistem Informasi', 'sks' => 3, 'semester' => 5],
            ['kode_mk' => 'UNW00007', 'nama_mk' => 'Kewirausahaan', 'sks' => 2, 'semester' => 5],
            ['kode_mk' => 'PAIK6504', 'nama_mk' => 'Proyek Perangkat Lunak', 'sks' => 3, 'semester' => 5],
            ['kode_mk' => 'PAIK6506', 'nama_mk' => 'Keamanan dan Jaminan Informasi', 'sks' => 3, 'semester' => 5],
            ['kode_mk' => 'PAIK6501', 'nama_mk' => 'Pengembangan Berbasis Platform', 'sks' => 4, 'semester' => 5],
            ['kode_mk' => 'PAIK6502', 'nama_mk' => 'Komputasi Tersebar dan Paralel', 'sks' => 3, 'semester' => 5],
            ['kode_mk' => 'PAIK6505', 'nama_mk' => 'Pembelajaran Mesin', 'sks' => 3, 'semester' => 5],
            ['kode_mk' => 'PAIK6603', 'nama_mk' => 'Masyarakat dan Etika Profesi', 'sks' => 3, 'semester' => 6],
            ['kode_mk' => 'PAIK6604', 'nama_mk' => 'Praktik Kerja Lapangan', 'sks' => 3, 'semester' => 6],
            ['kode_mk' => 'PAIK6605', 'nama_mk' => 'Manajemen Proyek', 'sks' => 3, 'semester' => 6],
            ['kode_mk' => 'PAIK6601', 'nama_mk' => 'Analisis dan Strategi Algoritma', 'sks' => 2, 'semester' => 6],
            ['kode_mk' => 'PAIK6602', 'nama_mk' => 'Uji Perangkat Lunak', 'sks' => 3, 'semester' => 6],
            ['kode_mk' => 'PAIK6702', 'nama_mk' => 'Teori Bahasa dan Otomata', 'sks' => 3, 'semester' => 7],
            ['kode_mk' => 'PAIK6701', 'nama_mk' => 'Metodologi dan Penulisan Ilmiah', 'sks' => 2, 'semester' => 7],
            ['kode_mk' => 'UNW00008', 'nama_mk' => 'Kuliah Kerja Nyata', 'sks' => 3, 'semester' => 8],
            ['kode_mk' => 'PAIK6801', 'nama_mk' => 'Tugas Akhir', 'sks' => 6, 'semester' => 8],
            ['kode_mk' => 'PAIK6817', 'nama_mk' => 'Robotika', 'sks' => 3, 'semester' => 6],
            ['kode_mk' => 'PAIK6803', 'nama_mk' => 'Topik Khusus RPL STI', 'sks' => 3, 'semester' => 6],
            ['kode_mk' => 'PAIK6802', 'nama_mk' => 'Topik Khusus SC KV', 'sks' => 3, 'semester' => 6],
            ['kode_mk' => 'PAIK6818', 'nama_mk' => 'Pengolahan Bahasa Alami', 'sks' => 3, 'semester' => 6], 
            ['kode_mk' => 'PAIK6814', 'nama_mk' => 'Intelijen Bisnis', 'sks' => 3, 'semester' => 6], 
            ['kode_mk' => 'PAIK6813', 'nama_mk' => 'Data Bisnis', 'sks' => 3, 'semester' => 6]
        ];

        // Insert data into mata_kuliah table
        foreach ($mataKuliahData as $data) {
            DB::table('mata_kuliah')->insert([
                'kode_mk' => $data['kode_mk'],
                'nama_mk' => $data['nama_mk'],
                'sks' => $data['sks'],
                'semester' => $data['semester'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
