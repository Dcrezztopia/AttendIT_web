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
            ['id_matkul' => 1, 'id_dosen' => 1],
            ['id_matkul' => 2, 'id_dosen' => 1],
            ['id_matkul' => 3, 'id_dosen' => 2],
            ['id_matkul' => 4, 'id_dosen' => 2],
        ]);
    }
}
