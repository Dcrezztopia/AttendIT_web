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
                'username' => 'dela',
                'role' => 'mahasiswa',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'mahasiswa2@example.com',
                'username' => 'kinata',
                'role' => 'mahasiswa',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'mahasiswa3@example.com',
                'username' => 'mulki',
                'role' => 'mahasiswa',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'mahasiswa4@example.com',
                'username' => 'pascalis',
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
            [
                'email' => 'dosen5@example.com',
                'username' => 'dosen5',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen6@example.com',
                'username' => 'dosen6',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen7@example.com',
                'username' => 'dosen7',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen8@example.com',
                'username' => 'dosen8',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen9@example.com',
                'username' => 'dosen9',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen10@example.com',
                'username' => 'dosen10',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen11@example.com',
                'username' => 'dosen11',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen12@example.com',
                'username' => 'dosen12',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen13@example.com',
                'username' => 'dosen13',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen14@example.com',
                'username' => 'dosen14',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen15@example.com',
                'username' => 'dosen15',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen16@example.com',
                'username' => 'dosen16',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen17@example.com',
                'username' => 'dosen17',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen18@example.com',
                'username' => 'dosen18',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'dosen19@example.com',
                'username' => 'dosen19',
                'role' => 'dosen',
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]); 
    }
}
