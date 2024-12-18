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
                'nama' => 'Stefani Mayya Febria Hutagalung',
                'nim' => '24060122140179',
                'email' => 'stef.mfh@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2004-12-03',
                'alamat' => 'Jl. Anggrek No. 9, Jakarta',
                'no_telp' => '087899351824',
                'status' => 'Aktif',
                'gender' => 'Perempuan',
                'nip_doswal' => '16982412710003',
            ],
            [
                'nama' => 'Arifatul Mayya Kholida',
                'nim' => '24060122120003',
                'email' => 'arifatul.mayya@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2004-05-14',
                'alamat' => 'Jl. Ahmad Yani No. 9, Temanggung',
                'no_telp' => '081278593130',
                'status' => 'Aktif',
                'gender' => 'Perempuan',
                'nip_doswal' => '16982412710003',
            ],
            [
                'nama' => 'Wahidatuzzahro Febria Fithrurrahmah',
                'nim' => '24060122120008',
                'email' => 'febby_azfr@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2004-12-08',
                'alamat' => 'Jl. Mulyoharjo No. 11, Jepara',
                'no_telp' => '081234567890',
                'status' => 'Aktif',
                'gender' => 'Perempuan',
                'nip_doswal' => '16982412710003',
            ],
            [
                'nama' => 'Elsa Roshana R. Hutagalung',
                'nim' => '24060122120024',
                'email' => 'elsa.htglg@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2004-07-14',
                'alamat' => 'Jl. Pelajar No. 10, Balige',
                'no_telp' => '081278565094',
                'status' => 'Aktif',
                'gender' => 'Perempuan',
                'nip_doswal' => '16982412710003',
            ],
            [
                'nama' => 'Miriam Stefani Abigail Hutapea',
                'nim' => '24060122130051',
                'email' => 'abigailhtp@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2004-09-13',
                'alamat' => 'Jl. Abadi no. 16, Medan',
                'no_telp' => '081361054431',
                'status' => 'Aktif',
                'gender' => 'Perempuan',
                'nip_doswal' => '16982412710003',
            ],
            [
                'nama' => 'Ahmad Satria',
                'nim' => '24060122120051',
                'email' => 'ahmad.satria@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2004-05-20',
                'alamat' => 'Jl. Raya No. 10, Surabaya',
                'no_telp' => '081234567890',
                'status' => 'Aktif',
                'gender' => 'Laki-laki',
                'nip_doswal' => '16982412710003',
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => '24060122140101',
                'email' => 'budi.santoso@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2003-03-15',
                'alamat' => 'Jl. Merdeka No. 25, Malang',
                'no_telp' => '082345678901',
                'status' => 'Aktif',
                'gender' => 'Laki-laki',
                'nip_doswal' => '16982412710003',
            ],
            [
                'nama' => 'Citra Permatasari',
                'nim' => '24060122130100',
                'email' => 'citra.permatasari@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2006-08-10',
                'alamat' => 'Jl. Bukit No. 5, Surabaya',
                'no_telp' => '083456789012',
                'status' => 'Aktif',
                'gender' => 'Perempuan',
                'nip_doswal' => '16982412710003',
            ],
            [
                'nama' => 'Dina Pertiwi',
                'nim' => '24060122130089',
                'email' => 'dina.pertiwi@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2002-02-25',
                'alamat' => 'Jl. Kebon No. 12, Sidoarjo',
                'no_telp' => '084567890123',
                'status' => 'Aktif',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Eka Setiawan',
                'nim' => '24060122120001',
                'email' => 'eka.setiawan@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2005-11-30',
                'alamat' => 'Jl. Raya No. 9, Gresik',
                'no_telp' => '085678901234',
                'status' => 'Aktif',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Fahmi Rahman',
                'nim' => '24060122130067',
                'email' => 'fahmi.rahman@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2002-07-17',
                'alamat' => 'Jl. Pahlawan No. 14, Sidoarjo',
                'no_telp' => '086789012345',
                'status' => 'Aktif',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Gina Marwati',
                'nim' => '24060122140120',
                'email' => 'gina.marwati@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2004-01-22',
                'alamat' => 'Jl. Merpati No. 7, Mojokerto',
                'no_telp' => '087890123456',
                'status' => 'Aktif',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Hulk',
                'nim' => '24060122130045',
                'email' => 'hulkijo@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2003-06-18',
                'alamat' => 'Jl. Gunung No. 30, Surabaya',
                'no_telp' => '087801234567',
                'status' => 'Aktif',
                'gender' => 'Laki-laki',
                'nip_doswal' => '16982412710003',
            ],
            [
                'nama' => 'Indah Puspita',
                'nim' => '24060122130135',
                'email' => 'indah.puspita@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2004-04-05',
                'alamat' => 'Jl. Pelajar No. 18, Surabaya',
                'no_telp' => '082312345678',
                'status' => 'Aktif',
                'gender' => 'Perempuan',
                'nip_doswal' => '16982412710003',
            ],
            [
                'nama' => 'Joko Santoso',
                'nim' => '24060122140108',
                'email' => 'joko.santoso@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2003-09-03',
                'alamat' => 'Jl. Pahlawan No. 13, Surabaya',
                'no_telp' => '085123456789',
                'status' => 'Aktif',
                'gender' => 'Laki-laki',
                'nip_doswal' => '16982412710003',
            ],
            [
                'nama' => 'Peter Parker',
                'nim' => '24060122140109',
                'email' => 'peterparker@students.undip.ac.id',
                'angkatan' => 2022,
                'semester' => 5,
                'jurusan' => 'Informatika',
                'tanggal_lahir' => '2003-09-03',
                'alamat' => 'Jl. Pahlawan No. 13, Surabaya',
                'no_telp' => '085123456789',
                'status' => 'Aktif',
                'gender' => 'Laki-laki',
                'nip_doswal' => '16982412710003',
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
                'nip_doswal' => $data['nip_doswal']??null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
