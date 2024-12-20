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
                'nama' => 'Prof. Peter Parker',
                'nip' => '16982412710003',
                'email' => 'burjobp@live.undip.ac.id',
                'no_telp' => '081237682319',
                'tanggal_lahir' => '1979-04-25',
                'alamat' => 'Jl. Merdeka No. 10, Jakarta',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Dr. Eng. Adi Wibowo, S.Si., M.Kom.',
                'nip' => '198203092006041002',
                'email' => 'adiwibowo@lecturer.undip.ac.id',
                'no_telp' => '081234567890',
                'tanggal_lahir' => '1980-04-25',
                'alamat' => 'Jl. Merdeka No. 9, Jakarta',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Dinar Mutiara Kusumo Nugraheni, S.T.,M.InfoTech.(Comp).,Ph.D.',
                'nip' => '197601102009122002',
                'email' => 'dinarmutiara@lecturer.undip.ac.id',
                'no_telp' => '082345678901',
                'tanggal_lahir' => '1975-11-30',
                'alamat' => 'Jl. Kebangsaan No. 20, Bandung',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Dr. Aris Puji Widodo, S.Si., M.T.',
                'nip' => '197404011999031002',
                'email' => 'arispw@lecturer.undip.ac.id',
                'no_telp' => '083456789012',
                'tanggal_lahir' => '1985-08-15',
                'alamat' => 'Jl. Pahlawan No. 5, Surabaya',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Dr. Aris Sugiharto, S.Si.,M.Kom.',
                'nip' => '197108111997021004',
                'email' => 'arissugiharto@lecturer.undip.ac.id',
                'no_telp' => '084567890123',
                'tanggal_lahir' => '1982-02-18',
                'alamat' => 'Jl. Raya No. 7, Yogyakarta',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Dr. Retno Kusumaningrum, S.Si., M.Kom.',
                'nip' => '198104202005012001',
                'email' => 'retno@lecturer.undip.ac.id',
                'no_telp' => '085698765432',
                'tanggal_lahir' => '1988-10-05',
                'alamat' => 'Jl. Melati No. 12, Jakarta',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Dr. Sutikno, S.T., M.Cs.',
                'nip' => '197905242009121003',
                'email' => 'sutikno@lecturer.undip.ac.id',
                'no_telp' => '085665432109',
                'tanggal_lahir' => '1970-01-15',
                'alamat' => 'Jl. Diponegoro No. 12, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Drs. Eko Adi Sarwoko, M.Komp.',
                'nip' => '196511071992031003',
                'email' => 'ekoadisarwoko@lecturer.undip.ac.id',
                'no_telp' => '081234569870',
                'tanggal_lahir' => '1965-11-07',
                'alamat' => 'Jl. Tumpang No. 1, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Priyo Sidik Sasongko, S.Si., M.Kom.',
                'nip' => '197007051997021001',
                'email' => 'priyosidiksasongko@lecturer.undip.ac.id',
                'no_telp' => '081287654233',
                'tanggal_lahir' => '1970-07-05',
                'alamat' => 'Jl. Ronggowarsito No. 8, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Beta Noranita, S.Si., M.Kom.',
                'nip' => '197308291998922001',
                'email' => 'betanoranita@lecturer.undip.ac.id',
                'no_telp' => '081238472189',
                'tanggal_lahir' => '1973-08-29',
                'alamat' => 'Jl. Sampangan no. 2, Semarang',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Edy Suharto, S.T., M.Kom.',
                'nip' => '198009142006041002',
                'email' => 'edys@lecturer.undip.ac.id',
                'no_telp' => '081369432063',
                'tanggal_lahir' => '1980-09-14',
                'alamat' => 'Jl. Cendrawasih No. 8, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Guruh Aryotejo, S.Kom., M.Cs.',
                'nip' => '198012272015041002',
                'email' => 'guruh@lecturer.undip.ac.id',
                'no_telp' => '087878812174',
                'tanggal_lahir' => '1980-12-27',
                'alamat' => 'Jl. Grafika No. 6, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Dr. Helmie Arif Wibawa, S.Si., M.Cs.',
                'nip' => '197805162003121001',
                'email' => 'helmie@lecturer.undip.ac.id',
                'no_telp' => '081397846381',
                'tanggal_lahir' => '1978-05-16',
                'alamat' => 'Jl. Kanfer No. 15, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Dr. Indra Waspada, S.T., M.TI.',
                'nip' => '197902122008121002',
                'email' => 'indrawaspada@lecturer.undip.ac.id',
                'no_telp' => '087846329080',
                'tanggal_lahir' => '1979-02-12',
                'alamat' => 'Jl. Sumedang No. 1, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Khadijah, S.Kom., M.Cs.',
                'nip' => '198903032015042002',
                'email' => 'khadijah@lecturer.undip.ac.id',
                'no_telp' => '081765921980',
                'tanggal_lahir' => '1989-03-03',
                'alamat' => 'Jl. Selat Panjang No. 5, Semarang',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Muhammad Malik Hakim, S.T., M.T.I.',
                'nip' => '198106202015041002',
                'email' => 'muhammadmalikhakim@lecturer.undip.ac.id',
                'no_telp' => '081357192134',
                'tanggal_lahir' => '1981-06-20',
                'alamat' => 'Jl. Argopuro No. 9, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Nurdin Bahtiar, S.Si., M.T.',
                'nip' => '197907202003121002',
                'email' => 'nurdinbahtiar@lecturer.undip.ac.id',
                'no_telp' => '087850249140',
                'tanggal_lahir' => '1979-07-20',
                'alamat' => 'Jl. Genuk No. 3, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Prajanto Wahyu Adi, M.Kom.',
                'nip' => '198803222020121010',
                'email' => 'prajanto@lecturer.undip.ac.id',
                'no_telp' => '082496849678',
                'tanggal_lahir' => '1988-03-22',
                'alamat' => 'Jl. Cendrawasih No. 4, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Ragil Saputra, S.Si., M.Cs.',
                'nip' => '198010212005011003',
                'email' => 'ragilsaputra@lecturer.undip.ac.id',
                'no_telp' => '081789447563',
                'tanggal_lahir' => '1980-10-21',
                'alamat' => 'Jl. Padma No. 45, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Rismiyati, B.Eng., M.Cs.',
                'nip' => '198511252018032001',
                'email' => 'rismiyati@lecturer.undip.ac.id',
                'no_telp' => '085894028074',
                'tanggal_lahir' => '1985-11-25',
                'alamat' => 'Jl. Ahmad Yani No. 21, Semarang',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Satriyo Adhy, S.Si., M.T.',
                'nip' => '198302032006041002',
                'email' => 'satriyo@lecturer.undip.ac.id',
                'no_telp' => '081378593081',
                'tanggal_lahir' => '1983-02-03',
                'alamat' => 'Jl. Kaligawe No. 2, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Adhe Setya Pramayoga, M.T.',
                'nip' => '199112092024061001',
                'email' => 'adhesetya@lecturer.undip.ac.id',
                'no_telp' => '085604932723',
                'tanggal_lahir' => '1991-12-09',
                'alamat' => 'Jl. Tlogosari No. 5, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Sandy Kurniawan, S.Kom., M.Kom.',
                'nip' => '199603032024061003',
                'email' => 'sandy@lecturer.undip.ac.id',
                'no_telp' => '082395068005',
                'tanggal_lahir' =>'1996-03-03',
                'alamat' => 'Jl. Purba No. 15, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Yunila Dwi Putri Ariyanti, S.Kom., M.Kom.',
                'nip' => '198806142022102001',
                'email' => 'yuniladwiputriariyan@lecturer.undip.ac.id',
                'no_telp' => '088394052816',
                'tanggal_lahir' => '1988-06-14',
                'alamat' => 'Jl. DI. Panjaitan No. 23, Semarang',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Dr. Yeva Fadhilah Ashari, S.Si, M.Si.',
                'nip' => '199204252023072001',
                'email' => 'yeva@lecturer.undip.ac.id',
                'no_telp' => '086590897638',
                'tanggal_lahir' => '1992-04-25',
                'alamat' => 'Jl. Sukun No. 8, Semarang',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Etna Vianita, S.Mat., M.Mat.',
                'nip' => '199602212023072001',
                'email' => 'etnavianita02@lecturer.undip.ac.id',
                'no_telp' => '081267943004',
                'tanggal_lahir' => '1996-02-21',
                'alamat' => 'Jl. Tanjung No. 22, Semarang',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Dhena Kamalia Fuadi, S.Kom., M.Kom.',
                'nip' => '199606132024062001',
                'email' => 'dhenakamalia@lecturer.undip.ac.id',
                'no_telp' => '082289604586',
                'tanggal_lahir' => '1996-06-13',
                'alamat' => 'Jl. Sisingamangaraja no. 15, Semarang',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Henri Tantyoko, S.Kom., M.Kom.',
                'nip' => '199612272024061001',
                'email' => 'henritantyoko@lecturer.undip.ac.id',
                'no_telp' => '085893025600',
                'tanggal_lahir' => '1996-12-27',
                'alamat' => 'Jl. Sudirman No. 2, Semarang',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Satriawan Rasyid Purnama, S.Kom., M.Cs.',
                'nip' => '199805212024061001',
                'email' => 'satriawanrasyid@lecturer.undip.ac.id',
                'no_telp' => '081396048399',
                'tanggal_lahir' => '1998-05-21',
                'alamat' => 'Jl. Banjarsari No. 11, Semarang',
                'gender' => 'Laki-laki',
            ]
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
