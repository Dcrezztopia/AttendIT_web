<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jadwal::insert([
            ['id_kelas' => 1, 'id_matkul' => 1, 'id_dosen' => 1, 'hari' => 'Senin', 'waktu_mulai' => '08:00:00', 'waktu_selesai' => '10:00:00', 'ruang_kelas' => 'A101'],
            ['id_kelas' => 2, 'id_matkul' => 2, 'id_dosen' => 1, 'hari' => 'Selasa', 'waktu_mulai' => '10:00:00', 'waktu_selesai' => '12:00:00', 'ruang_kelas' => 'A102'],
            ['id_kelas' => 10, 'id_matkul' => 3, 'id_dosen' => 2, 'hari' => 'Rabu', 'waktu_mulai' => '13:00:00', 'waktu_selesai' => '15:00:00', 'ruang_kelas' => 'B201'],
            ['id_kelas' => 11, 'id_matkul' => 4, 'id_dosen' => 2, 'hari' => 'Kamis', 'waktu_mulai' => '15:00:00', 'waktu_selesai' => '17:00:00', 'ruang_kelas' => 'B202'],
        ]);
    }
}
