<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::insert([
            ['nidn' => '123456789', 'nama_dosen' => 'Ulla Delfana Rosiani, S.ST., MT., Dr.', 'id_user' => 6],
            ['nidn' => '987654321', 'nama_dosen' => 'Ely Setyo Astuti, ST., MT.', 'id_user' => 7],
            ['nidn' => '234567891', 'nama_dosen' => 'Candra Bella Vista, S.Kom., MT.', 'id_user' => 8],
            ['nidn' => '345678912', 'nama_dosen' => 'Farid Angga Pribadi, S.Kom., M.Kom.', 'id_user' => 9],
        ]);
    }
}
