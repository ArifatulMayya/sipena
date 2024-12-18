<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            // Mahasiswa
            [
                'nama' => 'Stefani Mayya Febria Hutagalung',
                'email' => 'stef.mfh@students.undip.ac.id',
                'password' => Hash::make('12345678'),
                'role' => 'mahasiswa',
                'nim_nip' => '24060122140179',
            ],
            [
                'nama' => 'Peter Parker',
                'email' => 'peterparker@students.undip.ac.id',
                'password' => Hash::make('12345678'),
                'role' => 'mahasiswa',
                'nim_nip' => '24060122140109',
            ],
            [
                'nama' => 'Hulk',
                'email' => 'hulkijo@students.undip.ac.id',
                'password' => Hash::make('12345678'),
                'role' => 'mahasiswa',
                'nim_nip' => '24060122130045',
            ],
            

            // Dekan
            [
                'nama' => 'Prof. Thanos',
                'email' => 'ubiungu@lecturer.undip.ac.id',
                'password' => Hash::make('12345678'),
                'role' => 'dekan',
            ],

            // Kaprodi
            [
                'nama' => 'Dr. Strange',
                'email' => 'kangsihir@lecturer.undip.ac.id',
                'password' => Hash::make('12345678'),
                'role' => 'kaprodi',
            ],


            // Bagian Akademik
            [
                'nama' => 'Benny',
                'email' => 'bennyganteng@lecturer.undip.ac.id',
                'password' => Hash::make('12345678'),
                'role' => 'bagian akademik',
            ],

            // Pembimbing Akademik 1
            [
                'nama' => 'Prof. Peter Parker',
                'email' => 'burjobp@live.undip.ac.id',
                'password' => Hash::make('12345678'),
                'role' => 'pembimbing akademik',
                'nim_nip' => '16982412710003',
            ]
        ];

        // Insert users data
        foreach ($users as $user) {
            DB::table('users')->insert([
                'nama' => $user['nama'],
                'email' => $user['email'],
                'password' => $user['password'],
                'role' => $user['role'],
                'email_verified_at' => now(),
                'nim_nip' => $user['nim_nip'] ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
