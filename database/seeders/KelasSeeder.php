<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelasTI = ['TI-3A', 'TI-3B', 'TI-3C', 'TI-3D', 'TI-3E', 'TI-3F', 'TI-3G', 'TI-3H', 'TI-3I'];
        $kelasSIB = ['SIB-3A', 'SIB-3B', 'SIB-3C', 'SIB-3D', 'SIB-3E'];

        foreach ($kelasTI as $kelas) {
            Kelas::insert([
                'nama_kelas' => $kelas,
                'id_prodi' => 1, // Prodi Teknik Informatika
            ]);
        }

        foreach ($kelasSIB as $kelas) {
            Kelas::insert([
                'nama_kelas' => $kelas,
                'id_prodi' => 2, // Prodi Sistem Informasi Bisnis
            ]);
        }
    }
}
