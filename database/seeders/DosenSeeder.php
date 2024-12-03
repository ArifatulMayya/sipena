<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen = [
            [
                'nama' => 'Prof. Charles Blue',
                'nip' => '16982412710003',
                'email' => 'charles.blue@live.undip.ac.id',
                'no_telp' => '081237682319',
                'tanggal_lahir' => '1979-04-25',
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Dr. Alice Johnson',
                'nip' => '123456789',
                'email' => 'alice.johnson@university.com',
                'no_telp' => '081234567890',
                'tanggal_lahir' => '1980-04-25',
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Prof. Bob Smith',
                'nip' => '987654321',
                'email' => 'bob.smith@university.com',
                'no_telp' => '082345678901',
                'tanggal_lahir' => '1975-11-30',
                'alamat' => 'Jl. Kebangsaan No. 20, Bandung',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Dr. Charlie Brown',
                'nip' => '112233445',
                'email' => 'charlie.brown@university.com',
                'no_telp' => '083456789012',
                'tanggal_lahir' => '1985-08-15',
                'alamat' => 'Jl. Pahlawan No. 5, Surabaya',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Prof. Daisy White',
                'nip' => '223344556',
                'email' => 'daisy.white@university.com',
                'no_telp' => '084567890123',
                'tanggal_lahir' => '1982-02-18',
                'alamat' => 'Jl. Raya No. 7, Yogyakarta',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Dr. Edward Green',
                'nip' => '334455667',
                'email' => 'edward.green@university.com',
                'no_telp' => '085678901234',
                'tanggal_lahir' => '1990-12-05',
                'alamat' => 'Jl. Universitas No. 12, Semarang',
                'gender' => 'Laki-laki',
            ],
        ];

        // Insert dosen data into the 'dosen' table
        foreach ($dosen as $d) {
            DB::table('dosen')->insert([
                'nama' => $d['nama'],
                'nip' => $d['nip'],
                'email' => $d['email'],
                'no_telp' => $d['no_telp'],
                'tanggal_lahir' => $d['tanggal_lahir'],
                'alamat' => $d['alamat'],
                'gender' => $d['gender'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
