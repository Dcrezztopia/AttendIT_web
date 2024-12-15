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
            // id mahasiswa 1
            [
                'id_jadwal' => 1,
                'id_mahasiswa' => 1,
                'pertemuan_ke' => 1,
                'tanggal_presensi' => '2024-08-26',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 2,
                'id_mahasiswa' => 1,
                'pertemuan_ke' => 1,
                'tanggal_presensi' => '2024-08-26',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 3,
                'id_mahasiswa' => 1,
                'pertemuan_ke' => 2,
                'tanggal_presensi' => '2024-09-03',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 4,
                'id_mahasiswa' => 1,
                'pertemuan_ke' => 2,
                'tanggal_presensi' => '2024-09-03',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 5,
                'id_mahasiswa' => 1,
                'pertemuan_ke' => 6,
                'tanggal_presensi' => '2024-10-02',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 6,
                'id_mahasiswa' => 1,
                'pertemuan_ke' => 6,
                'tanggal_presensi' => '2024-10-03',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 7,
                'id_mahasiswa' => 1,
                'pertemuan_ke' => 12,
                'tanggal_presensi' => '2024-11-14',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 8,
                'id_mahasiswa' => 1,
                'pertemuan_ke' => 12,
                'tanggal_presensi' => '2024-11-15',
                'status_presensi' => 'alpha',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 5,
                'id_mahasiswa' => 1,
                'pertemuan_ke' => 16,
                'tanggal_presensi' => '2024-12-11',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 6,
                'id_mahasiswa' => 1,
                'pertemuan_ke' => 16,
                'tanggal_presensi' => '2024-12-12',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            // id mahasiswa 2
            [
                'id_jadwal' => 9,
                'id_mahasiswa' => 2,
                'pertemuan_ke' => 1,
                'tanggal_presensi' => '2024-08-26',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 10,
                'id_mahasiswa' => 2,
                'pertemuan_ke' => 1,
                'tanggal_presensi' => '2024-08-26',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 11,
                'id_mahasiswa' => 2,
                'pertemuan_ke' => 2,
                'tanggal_presensi' => '2024-09-03',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 12,
                'id_mahasiswa' => 2,
                'pertemuan_ke' => 2,
                'tanggal_presensi' => '2024-09-03',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 13,
                'id_mahasiswa' => 2,
                'pertemuan_ke' => 6,
                'tanggal_presensi' => '2024-10-02',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 14,
                'id_mahasiswa' => 2,
                'pertemuan_ke' => 6,
                'tanggal_presensi' => '2024-10-02',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 15,
                'id_mahasiswa' => 2,
                'pertemuan_ke' => 12,
                'tanggal_presensi' => '2024-11-14',
                'status_presensi' => 'alpha',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 16,
                'id_mahasiswa' => 2,
                'pertemuan_ke' => 12,
                'tanggal_presensi' => '2024-11-15',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 9,
                'id_mahasiswa' => 2,
                'pertemuan_ke' => 16,
                'tanggal_presensi' => '2024-12-09',
                'status_presensi' => 'alpha',
                'tahun_ajaran' => '2024/2025',
            ],
            [
                'id_jadwal' => 10,
                'id_mahasiswa' => 2,
                'pertemuan_ke' => 16,
                'tanggal_presensi' => '2024-12-09',
                'status_presensi' => 'hadir',
                'tahun_ajaran' => '2024/2025',
            ],
            // Add more records as needed
        ]);
    }
}
