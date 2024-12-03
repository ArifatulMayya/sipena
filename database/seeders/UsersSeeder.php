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
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
            ],
            [
                'nama' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
            ],
            [
                'nama' => 'Samuel Green',
                'email' => 'samuel.green@example.com',
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
            ],
            [
                'nama' => 'Emily Johnson',
                'email' => 'emily.johnson@example.com',
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
            ],
            [
                'nama' => 'Michael Brown',
                'email' => 'michael.brown@example.com',
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
            ],

            // Dekan
            [
                'nama' => 'Prof. Adam White',
                'email' => 'adam.white@example.com',
                'password' => Hash::make('password123'),
                'role' => 'dekan',
            ],

            // Kaprodi
            [
                'nama' => 'Dr. Susan Black',
                'email' => 'susan.black@example.com',
                'password' => Hash::make('password123'),
                'role' => 'kaprodi',
            ],

            // Bagian Akademik
            [
                'nama' => 'Alice Grey',
                'email' => 'alice.grey@example.com',
                'password' => Hash::make('password123'),
                'role' => 'bagian akademik',
            ],

            // Pembimbing Akademik 1
            [
                'nama' => 'Prof. Charles Blue',
                'email' => 'charles.blue@live.undip.ac.id',
                'password' => Hash::make('password123'),
                'role' => 'pembimbing akademik',
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
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
