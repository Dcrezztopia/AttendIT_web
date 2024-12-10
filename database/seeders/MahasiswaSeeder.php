<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */ 
    public function run(): void
    {
        Mahasiswa::insert([
            ['nim' => '2241720058', 'nama_mahasiswa' => 'Dela Farahita Zain', 'foto' => 'foto1.jpg', 'prodi' => 'Teknik Informatika', 'id_user' => 2, 'id_kelas' => 1],
            ['nim' => '2241720087', 'nama_mahasiswa' => 'Kinata Dewa Ariandi', 'foto' => 'foto2.jpg', 'prodi' => 'Teknik Informatika', 'id_user' => 3, 'id_kelas' => 2],
            ['nim' => '2241720131', 'nama_mahasiswa' => 'Mulki Hakim', 'foto' => 'foto3.jpg', 'prodi' => 'Sistem Informasi Bisnis', 'id_user' => 4, 'id_kelas' => 10],
            ['nim' => '2241720140', 'nama_mahasiswa' => 'Pascalis Dewangga Sandi Laksono', 'foto' => 'foto4.jpg', 'prodi' => 'Sistem Informasi Bisnis', 'id_user' => 5, 'id_kelas' => 11],
        ]);
    }
}
