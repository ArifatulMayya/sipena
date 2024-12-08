<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Manually defined rooms with specific details
        $rooms = [
            ['no_ruang' => 'A101', 'blok_gedung' => 'A', 'lantai' => 1, 'kapasitas' => 30, 'keperluan' => 'Ruang Kuliah', 'prodi' => 'Informatika'],
            ['no_ruang' => 'A102', 'blok_gedung' => 'A', 'lantai' => 1, 'kapasitas' => 35, 'keperluan' => 'Laboratorium', 'prodi' => 'Biologi'],
            ['no_ruang' => 'A103', 'blok_gedung' => 'A', 'lantai' => 1, 'kapasitas' => 40, 'keperluan' => 'Ruang Meeting', 'prodi' => 'Matematika'],
            ['no_ruang' => 'A104', 'blok_gedung' => 'A', 'lantai' => 1, 'kapasitas' => 50, 'keperluan' => 'Ruang Seminar', 'prodi' => 'Informatika'],
            ['no_ruang' => 'A105', 'blok_gedung' => 'A', 'lantai' => 1, 'kapasitas' => 25, 'keperluan' => 'Ruang Praktikum', 'prodi' => 'Biologi'],
            ['no_ruang' => 'B101', 'blok_gedung' => 'B', 'lantai' => 1, 'kapasitas' => 30, 'keperluan' => 'Ruang Kuliah', 'prodi' => 'Matematika'],
            ['no_ruang' => 'B102', 'blok_gedung' => 'B', 'lantai' => 1, 'kapasitas' => 35, 'keperluan' => 'Laboratorium', 'prodi' => 'Informatika'],
            ['no_ruang' => 'B103', 'blok_gedung' => 'B', 'lantai' => 1, 'kapasitas' => 40, 'keperluan' => 'Ruang Meeting', 'prodi' => 'Biologi'],
            ['no_ruang' => 'B104', 'blok_gedung' => 'B', 'lantai' => 1, 'kapasitas' => 50, 'keperluan' => 'Ruang Seminar', 'prodi' => 'Matematika'],
            ['no_ruang' => 'B105', 'blok_gedung' => 'B', 'lantai' => 1, 'kapasitas' => 25, 'keperluan' => 'Ruang Praktikum', 'prodi' => 'Informatika'],
            ['no_ruang' => 'C101', 'blok_gedung' => 'C', 'lantai' => 1, 'kapasitas' => 30, 'keperluan' => 'Ruang Kuliah', 'prodi' => 'Biologi'],
            ['no_ruang' => 'C102', 'blok_gedung' => 'C', 'lantai' => 1, 'kapasitas' => 35, 'keperluan' => 'Laboratorium', 'prodi' => 'Matematika'],
            ['no_ruang' => 'C103', 'blok_gedung' => 'C', 'lantai' => 1, 'kapasitas' => 40, 'keperluan' => 'Ruang Meeting', 'prodi' => 'Informatika'],
            ['no_ruang' => 'C104', 'blok_gedung' => 'C', 'lantai' => 1, 'kapasitas' => 50, 'keperluan' => 'Ruang Seminar', 'prodi' => 'Biologi'],
            ['no_ruang' => 'C105', 'blok_gedung' => 'C', 'lantai' => 1, 'kapasitas' => 25, 'keperluan' => 'Ruang Praktikum', 'prodi' => 'Matematika'],
            ['no_ruang' => 'D101', 'blok_gedung' => 'D', 'lantai' => 1, 'kapasitas' => 30, 'keperluan' => 'Ruang Kuliah', 'prodi' => 'Informatika'],
            ['no_ruang' => 'D102', 'blok_gedung' => 'D', 'lantai' => 1, 'kapasitas' => 35, 'keperluan' => 'Laboratorium', 'prodi' => 'Biologi'],
            ['no_ruang' => 'D103', 'blok_gedung' => 'D', 'lantai' => 1, 'kapasitas' => 40, 'keperluan' => 'Ruang Meeting', 'prodi' => 'Matematika'],
            ['no_ruang' => 'D104', 'blok_gedung' => 'D', 'lantai' => 1, 'kapasitas' => 50, 'keperluan' => 'Ruang Seminar', 'prodi' => 'Informatika'],
            ['no_ruang' => 'D105', 'blok_gedung' => 'D', 'lantai' => 1, 'kapasitas' => 25, 'keperluan' => 'Ruang Praktikum', 'prodi' => 'Biologi'],
        ];

        // Insert each room manually
        foreach ($rooms as $room) {
            DB::table('ruang')->insert([
                'no_ruang' => $room['no_ruang'],
                'blok_gedung' => $room['blok_gedung'],
                'lantai' => $room['lantai'],
                'prodi' => $room['prodi'],
                'kapasitas' => $room['kapasitas'],
                'keperluan' => $room['keperluan'],
                'status'=>'Approved',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
