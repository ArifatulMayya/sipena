<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswaData = [
            [
                'nama' => 'Ahmad Satria',
                'nim' => '1234567890',
                'email' => 'ahmad.satria@example.com',
                'angkatan' => 2020,
                'semester' => 6,
                'jurusan' => 'Teknik Informatika',
                'tanggal_lahir' => '1998-05-20',
                'alamat' => 'Jl. Raya No. 10, Surabaya',
                'no_telp' => '081234567890',
                'status' => 'Aktif',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => '1234567891',
                'email' => 'budi.santoso@example.com',
                'angkatan' => 2019,
                'semester' => 7,
                'jurusan' => 'Teknik Informatika',
                'tanggal_lahir' => '1997-03-15',
                'alamat' => 'Jl. Merdeka No. 25, Malang',
                'no_telp' => '082345678901',
                'status' => 'Aktif',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Citra Permatasari',
                'nim' => '1234567892',
                'email' => 'citra.permatasari@example.com',
                'angkatan' => 2021,
                'semester' => 3,
                'jurusan' => 'Teknik Informatika',
                'tanggal_lahir' => '2000-08-10',
                'alamat' => 'Jl. Bukit No. 5, Surabaya',
                'no_telp' => '083456789012',
                'status' => 'Aktif',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Dina Pertiwi',
                'nim' => '1234567893',
                'email' => 'dina.pertiwi@example.com',
                'angkatan' => 2020,
                'semester' => 5,
                'jurusan' => 'Sistem Informasi',
                'tanggal_lahir' => '1999-02-25',
                'alamat' => 'Jl. Kebon No. 12, Sidoarjo',
                'no_telp' => '084567890123',
                'status' => 'Aktif',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Eka Setiawan',
                'nim' => '1234567894',
                'email' => 'eka.setiawan@example.com',
                'angkatan' => 2021,
                'semester' => 2,
                'jurusan' => 'Sistem Informasi',
                'tanggal_lahir' => '2000-11-30',
                'alamat' => 'Jl. Raya No. 9, Gresik',
                'no_telp' => '085678901234',
                'status' => 'Aktif',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Fahmi Rahman',
                'nim' => '1234567895',
                'email' => 'fahmi.rahman@example.com',
                'angkatan' => 2019,
                'semester' => 8,
                'jurusan' => 'Teknik Informatika',
                'tanggal_lahir' => '1997-07-17',
                'alamat' => 'Jl. Pahlawan No. 14, Sidoarjo',
                'no_telp' => '086789012345',
                'status' => 'Aktif',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Gina Marwati',
                'nim' => '1234567896',
                'email' => 'gina.marwati@example.com',
                'angkatan' => 2021,
                'semester' => 1,
                'jurusan' => 'Teknik Komputer',
                'tanggal_lahir' => '2001-01-22',
                'alamat' => 'Jl. Merpati No. 7, Mojokerto',
                'no_telp' => '087890123456',
                'status' => 'Aktif',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Hendra Kurniawan',
                'nim' => '1234567897',
                'email' => 'hendra.kurniawan@example.com',
                'angkatan' => 2020,
                'semester' => 6,
                'jurusan' => 'Teknik Elektro',
                'tanggal_lahir' => '1998-06-18',
                'alamat' => 'Jl. Gunung No. 30, Surabaya',
                'no_telp' => '088901234567',
                'status' => 'Aktif',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Indah Puspita',
                'nim' => '1234567898',
                'email' => 'indah.puspita@example.com',
                'angkatan' => 2021,
                'semester' => 3,
                'jurusan' => 'Manajemen Informatika',
                'tanggal_lahir' => '2000-04-05',
                'alamat' => 'Jl. Pelajar No. 18, Surabaya',
                'no_telp' => '089012345678',
                'status' => 'Aktif',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Joko Santoso',
                'nim' => '1234567899',
                'email' => 'joko.santoso@example.com',
                'angkatan' => 2020,
                'semester' => 4,
                'jurusan' => 'Manajemen Informatika',
                'tanggal_lahir' => '1999-09-03',
                'alamat' => 'Jl. Pahlawan No. 13, Surabaya',
                'no_telp' => '090123456789',
                'status' => 'Aktif',
                'gender' => 'Laki-laki',
            ],
        ];

        // Insert data into mahasiswa table
        foreach ($mahasiswaData as $data) {
            DB::table('mahasiswa')->insert([
                'nama' => $data['nama'],
                'nim' => $data['nim'],
                'email' => $data['email'],
                'angkatan' => $data['angkatan'],
                'semester' => $data['semester'],
                'jurusan' => $data['jurusan'],
                'tanggal_lahir' => $data['tanggal_lahir'],
                'alamat' => $data['alamat'],
                'no_telp' => $data['no_telp'],
                'status' => $data['status'],
                'gender' => $data['gender'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
