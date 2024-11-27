<?php

namespace Database\Seeders;

use App\Models\MatkulDosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatkulDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MatkulDosen::insert([
            ['id_matkul' => 1, 'id_dosen' => 12],
            ['id_matkul' => 2, 'id_dosen' => 13],
            ['id_matkul' => 3, 'id_dosen' => 18],
            ['id_matkul' => 4, 'id_dosen' => 15],
            ['id_matkul' => 5, 'id_dosen' => 17],
            ['id_matkul' => 6, 'id_dosen' => 14],
            ['id_matkul' => 7, 'id_dosen' => 11],
            ['id_matkul' => 7, 'id_dosen' => 19],
            ['id_matkul' => 8, 'id_dosen' => 16],
            ['id_matkul' => 9, 'id_dosen' => 3],
            ['id_matkul' => 10, 'id_dosen' => 8],
            ['id_matkul' => 11, 'id_dosen' => 7],
            ['id_matkul' => 12, 'id_dosen' => 10],
            ['id_matkul' => 12, 'id_dosen' => 1],
            ['id_matkul' => 13, 'id_dosen' => 9],
            ['id_matkul' => 13, 'id_dosen' => 5],
            ['id_matkul' => 14, 'id_dosen' => 2],
            ['id_matkul' => 15, 'id_dosen' => 4],
            ['id_matkul' => 16, 'id_dosen' => 6],
        ]);
    }
}
