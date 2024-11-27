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
            ['kode_dosen' => 'BSA', 'nama_dosen' => 'Banni Satria Andoko, S. Kom., M.MSI., Dr.Eng.', 'id_user' => 6],
            ['kode_dosen' => 'DHS', 'nama_dosen' => 'Dian Hanifudin Subhi, S.Kom., M.Kom.', 'id_user' => 7],
            ['kode_dosen' => 'ELA', 'nama_dosen' => 'Eka Larasati Amalia, S.ST., MT.', 'id_user' => 8],
            ['kode_dosen' => 'FPR', 'nama_dosen' => 'Farid Angga Pribadi, S.Kom., M.Kom', 'id_user' => 9],
            ['kode_dosen' => 'MZA', 'nama_dosen' => 'Moch. Zawaruddin Abdullah, S.ST., M.Kom', 'id_user' => 10],
            ['kode_dosen' => 'UN', 'nama_dosen' => 'Usman Nurhasan, S.Kom., MT.', 'id_user' => 11],
            ['kode_dosen' => 'VIS', 'nama_dosen' => 'Candra Bella Vista, S.Kom., MT.', 'id_user' => 12],
            ['kode_dosen' => 'ZUL', 'nama_dosen' => 'Ahmadi Yuli Ananta, ST., M.M.', 'id_user' => 13],
            ['kode_dosen' => 'DWW', 'nama_dosen' => 'Dimas Wahyu Wibowo, ST., MT.', 'id_user' => 14],
            ['kode_dosen' => 'RKA', 'nama_dosen' => 'Rakhmat Arianto, S.ST., M.Kom., Dr.', 'id_user' => 15],
            ['kode_dosen' => 'AAS', 'nama_dosen' => 'Amalia Agung Septarina, S.S.M.Tr.TT.', 'id_user' => 16],
            ['kode_dosen' => 'ADE', 'nama_dosen' => 'Ade Ismail S.Kom.. M. TI', 'id_user' => 17],
            ['kode_dosen' => 'ATQ', 'nama_dosen' => 'Atiqah Nurul Asri, S.Pd. M.Pd', 'id_user' => 18],
            ['kode_dosen' => 'CR', 'nama_dosen' => 'Cahya Rahmad, ST., M.Kom., Dr.Eng.', 'id_user' => 19],
            ['kode_dosen' => 'DDS', 'nama_dosen' => 'Dhebys Suryani. S,Kom., MT', 'id_user' => 20],
            ['kode_dosen' => 'SNA', 'nama_dosen' => 'Sofyan Noor Arief, S.ST., M.Kom.', 'id_user' => 21],
            ['kode_dosen' => 'UDR', 'nama_dosen' => 'Ulla Delfana Rosiani, S.ST., MT., Dr.', 'id_user' => 22],
            ['kode_dosen' => 'WID', 'nama_dosen' => 'Dr. Widaningsih Condrowardhani, SH, MH.', 'id_user' => 23],
            ['kode_dosen' => 'ESA', 'nama_dosen' => 'Ely Setyo Astuti, ST., MT.', 'id_user' => 24],
        ]);
    }
}
