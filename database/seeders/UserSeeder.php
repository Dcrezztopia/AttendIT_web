<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'email' => 'admin@example.com',
                'username' => 'admin',
                'role' => 'admin',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'mahasiswa1@example.com',
                'username' => 'mahasiswa1',
                'role' => 'mahasiswa',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'mahasiswa2@example.com',
                'username' => 'mahasiswa2',
                'role' => 'mahasiswa',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'mahasiswa3@example.com',
                'username' => 'mahasiswa3',
                'role' => 'mahasiswa',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'mahasiswa4@example.com',
                'username' => 'mahasiswa4',
                'role' => 'mahasiswa',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen1@example.com',
                'username' => 'dosen1',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen2@example.com',
                'username' => 'dosen2',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen3@example.com',
                'username' => 'dosen3',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen4@example.com',
                'username' => 'dosen4',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]); 
    }
}
