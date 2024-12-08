<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Matakuliah;
use App\Models\Mahasiswa;
use App\Models\Dosen;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call([
        UsersSeeder::class,
        MatakuliahSeeder::class,
        MahasiswaSeeder::class,
        DosenSeeder::class,
        RuangSeeder::class,
        JadwalkuliahSeeder::class,
        PengampuSeeder::class
      ]);
    }
}
