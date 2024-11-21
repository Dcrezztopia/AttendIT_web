<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prodi::insert([
            ['nama_prodi' => 'Teknik Informatika', 'created_at' => now(), 'updated_at' => now()],
            ['nama_prodi' => 'Sistem Informasi Bisnis', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
