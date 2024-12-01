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
             // Jadwal untuk TI-3A
             ['id_kelas' => 1, 'id_matkul_dosen' => 3, 'hari' => 'Senin', 'waktu_mulai' => '10:30:00', 'waktu_selesai' => '12:10:00', 'ruang_kelas' => 'RT02_5B'],
             ['id_kelas' => 1, 'id_matkul_dosen' => 6, 'hari' => 'Senin', 'waktu_mulai' => '12:50:00', 'waktu_selesai' => '18:00:00', 'ruang_kelas' => 'LAI2_8B'],
             ['id_kelas' => 1, 'id_matkul_dosen' => 1, 'hari' => 'Selasa', 'waktu_mulai' => '07:00:00', 'waktu_selesai' => '10:30:00', 'ruang_kelas' => 'LPR2_7B'],
             ['id_kelas' => 1, 'id_matkul_dosen' => 2, 'hari' => 'Selasa', 'waktu_mulai' => '12:50:00', 'waktu_selesai' => '16:20:00', 'ruang_kelas' => 'RT14_8T'],
             ['id_kelas' => 1, 'id_matkul_dosen' => 4, 'hari' => 'Rabu', 'waktu_mulai' => '12:50:00', 'waktu_selesai' => '16:20:00', 'ruang_kelas' => 'LDT_8B'],
             ['id_kelas' => 1, 'id_matkul_dosen' => 5, 'hari' => 'Kamis', 'waktu_mulai' => '07:50:00', 'waktu_selesai' => '11:20:00', 'ruang_kelas' => 'RT09_8B'],
             ['id_kelas' => 1, 'id_matkul_dosen' => 7, 'hari' => 'Kamis', 'waktu_mulai' => '11:20:00', 'waktu_selesai' => '17:10:00', 'ruang_kelas' => 'LIG2_7T'],
             ['id_kelas' => 1, 'id_matkul_dosen' => 9, 'hari' => 'Jumat', 'waktu_mulai' => '07:00:00', 'waktu_selesai' => '12:10:00', 'ruang_kelas' => 'LIG1_7T'],
 
             // Jadwal untuk TI-3B
             ['id_kelas' => 2, 'id_matkul_dosen' => 9, 'hari' => 'Senin', 'waktu_mulai' => '07:00:00', 'waktu_selesai' => '12:10:00', 'ruang_kelas' => 'LKJ2_7T'],
             ['id_kelas' => 2, 'id_matkul_dosen' => 5, 'hari' => 'Senin', 'waktu_mulai' => '14:30:00', 'waktu_selesai' => '18:00:00', 'ruang_kelas' => 'RT13_8T'],
             ['id_kelas' => 2, 'id_matkul_dosen' => 8, 'hari' => 'Selasa', 'waktu_mulai' => '07:00:00', 'waktu_selesai' => '12:10:00', 'ruang_kelas' => 'LERP_7T'],
             ['id_kelas' => 2, 'id_matkul_dosen' => 3, 'hari' => 'Selasa', 'waktu_mulai' => '14:30:00', 'waktu_selesai' => '16:20:00', 'ruang_kelas' => 'RT11_8B'],
             ['id_kelas' => 2, 'id_matkul_dosen' => 1, 'hari' => 'Rabu', 'waktu_mulai' => '07:00:00', 'waktu_selesai' => '10:30:00', 'ruang_kelas' => 'LIG2_7T'],
             ['id_kelas' => 2, 'id_matkul_dosen' => 2, 'hari' => 'Rabu', 'waktu_mulai' => '14:30:00', 'waktu_selesai' => '18:00:00', 'ruang_kelas' => 'RT03_5B'],
             ['id_kelas' => 2, 'id_matkul_dosen' => 6, 'hari' => 'Kamis', 'waktu_mulai' => '07:00:00', 'waktu_selesai' => '12:10:00', 'ruang_kelas' => 'LPR5_7B'],
             ['id_kelas' => 2, 'id_matkul_dosen' => 4, 'hari' => 'Jumat', 'waktu_mulai' => '08:40:00', 'waktu_selesai' => '12:10:00', 'ruang_kelas' => 'RT14_8T'],
 
             // Jadwal untuk SIB-3A
             ['id_kelas' => 10, 'id_matkul_dosen' => 9, 'hari' => 'Senin', 'waktu_mulai' => '13:00:00', 'waktu_selesai' => '15:00:00', 'ruang_kelas' => 'Lab Komputer 3'],
             ['id_kelas' => 10, 'id_matkul_dosen' => 10, 'hari' => 'Rabu', 'waktu_mulai' => '15:00:00', 'waktu_selesai' => '17:00:00', 'ruang_kelas' => 'Ruang Kelas 4'],
 
             // Jadwal untuk SIB-3B
             ['id_kelas' => 11, 'id_matkul_dosen' => 11, 'hari' => 'Jumat', 'waktu_mulai' => '08:00:00', 'waktu_selesai' => '10:00:00', 'ruang_kelas' => 'Lab Komputer 4'],
             ['id_kelas' => 11, 'id_matkul_dosen' => 12, 'hari' => 'Kamis', 'waktu_mulai' => '13:00:00', 'waktu_selesai' => '15:00:00', 'ruang_kelas' => 'Ruang Kelas 5'],
        ]);
    }
}
