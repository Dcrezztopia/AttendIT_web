<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Presensi;

class PresensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Presensi::insert([
            [
                'id_jadwal' => 1,
                'id_mahasiswa' => 1,
                'pertemuan_ke' => 1,
                'tanggal_presensi' => '2024-11-14',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 1,
                'id_mahasiswa' => 2,
                'pertemuan_ke' => 1,
                'tanggal_presensi' => '2024-11-14',
                'status_presensi' => 'alpha',
                'tahun_ajaran' => '2024/2025',
            ],
            // Add more records as needed
        ]);
    }
}
