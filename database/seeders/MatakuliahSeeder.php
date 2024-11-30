<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mataKuliahData = [
            ['kode_mk' => 'MK-101-ALG', 'nama_mk' => 'Aljabar Linear', 'sks' => 3, 'semester' => 1],
            ['kode_mk' => 'MK-102-DS', 'nama_mk' => 'Struktur Data', 'sks' => 3, 'semester' => 2],
            ['kode_mk' => 'MK-103-PBO', 'nama_mk' => 'Pemrograman Berorientasi Objek', 'sks' => 3, 'semester' => 2],
            ['kode_mk' => 'MK-104-DB', 'nama_mk' => 'Basis Data', 'sks' => 3, 'semester' => 3],
            ['kode_mk' => 'MK-105-JS', 'nama_mk' => 'Pemrograman JavaScript', 'sks' => 2, 'semester' => 3],
            ['kode_mk' => 'MK-106-PP', 'nama_mk' => 'Pemrograman Ponsel', 'sks' => 2, 'semester' => 4],
            ['kode_mk' => 'MK-107-OS', 'nama_mk' => 'Sistem Operasi', 'sks' => 3, 'semester' => 4],
            ['kode_mk' => 'MK-108-RPL', 'nama_mk' => 'Rekayasa Perangkat Lunak', 'sks' => 3, 'semester' => 5],
            ['kode_mk' => 'MK-109-TS', 'nama_mk' => 'Teori Bahasa dan Automata', 'sks' => 3, 'semester' => 5],
            ['kode_mk' => 'MK-110-KK', 'nama_mk' => 'Kalkulus', 'sks' => 4, 'semester' => 1],
            ['kode_mk' => 'MK-111-NT', 'nama_mk' => 'Jaringan Komputer', 'sks' => 3, 'semester' => 6],
            ['kode_mk' => 'MK-112-AI', 'nama_mk' => 'Kecerdasan Buatan', 'sks' => 3, 'semester' => 6],
            ['kode_mk' => 'MK-113-ML', 'nama_mk' => 'Pembelajaran Mesin', 'sks' => 3, 'semester' => 7],
            ['kode_mk' => 'MK-114-DSC', 'nama_mk' => 'Data Science', 'sks' => 3, 'semester' => 7],
            ['kode_mk' => 'MK-115-WD', 'nama_mk' => 'Desain Web', 'sks' => 3, 'semester' => 4],
            ['kode_mk' => 'MK-116-MBD', 'nama_mk' => 'Pengembangan Aplikasi Mobile', 'sks' => 3, 'semester' => 5],
            ['kode_mk' => 'MK-117-PT', 'nama_mk' => 'Pemrograman Terdistribusi', 'sks' => 3, 'semester' => 6],
            ['kode_mk' => 'MK-118-SI', 'nama_mk' => 'Sistem Informasi', 'sks' => 3, 'semester' => 5],
            ['kode_mk' => 'MK-119-KE', 'nama_mk' => 'Kewirausahaan', 'sks' => 2, 'semester' => 8],
            ['kode_mk' => 'MK-120-HCI', 'nama_mk' => 'Interaksi Manusia dan Komputer', 'sks' => 3, 'semester' => 7],
            ['kode_mk' => 'MK-121-ICT', 'nama_mk' => 'Teknologi Informasi dan Komunikasi', 'sks' => 3, 'semester' => 3],
            ['kode_mk' => 'MK-122-SD', 'nama_mk' => 'Sistem Digital', 'sks' => 3, 'semester' => 2],
            ['kode_mk' => 'MK-123-RE', 'nama_mk' => 'Rekayasa Elektronika', 'sks' => 4, 'semester' => 6],
            ['kode_mk' => 'MK-124-NM', 'nama_mk' => 'Metode Numerik', 'sks' => 3, 'semester' => 4],
            ['kode_mk' => 'MK-125-DP', 'nama_mk' => 'Desain Pemrograman', 'sks' => 3, 'semester' => 5],
            ['kode_mk' => 'MK-126-TSK', 'nama_mk' => 'Teori Sistem Komputer', 'sks' => 3, 'semester' => 6],
            ['kode_mk' => 'MK-127-CG', 'nama_mk' => 'Grafika Komputer', 'sks' => 3, 'semester' => 7],
            ['kode_mk' => 'MK-128-EK', 'nama_mk' => 'Etika Komputer', 'sks' => 2, 'semester' => 8],
            ['kode_mk' => 'MK-129-BK', 'nama_mk' => 'Keamanan Jaringan Komputer', 'sks' => 3, 'semester' => 7],
            ['kode_mk' => 'MK-130-KT', 'nama_mk' => 'Kecerdasan Teknik', 'sks' => 3, 'semester' => 7],
            ['kode_mk' => 'MK-131-PR', 'nama_mk' => 'Pemrograman Rangkaian', 'sks' => 3, 'semester' => 5],
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
