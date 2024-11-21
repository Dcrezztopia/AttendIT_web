<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MataKuliah::insert([
            ['nama_matkul' => 'Metodologi Penelitian', 'id_prodi' => 1],
            ['nama_matkul' => 'Pembelajaran Mesin', 'id_prodi' => 1],
            ['nama_matkul' => 'Kecerdasan Bisnis', 'id_prodi' => 2],
            ['nama_matkul' => 'Workshop', 'id_prodi' => 2],
        ]);
    }
}
