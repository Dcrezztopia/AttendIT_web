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
            // Mata kuliah untuk Teknik Informatika
            ['kode_matkul' => 'ADMK_JAR_TI', 'nama_matkul' => 'Administrasi dan Keamanan Jaringan', 'id_prodi' => 1],
            ['kode_matkul' => 'BING_PK_TI', 'nama_matkul' => 'Bahasa Inggris Persiapan Kerja', 'id_prodi' => 1],
            ['kode_matkul' => 'KWN_TI', 'nama_matkul' => 'Kewarganegaraan', 'id_prodi' => 1],
            ['kode_matkul' => 'KWU_TEK_TI', 'nama_matkul' => 'Kewirausahaan Berbasis Teknologi', 'id_prodi' => 1],
            ['kode_matkul' => 'METPEN_TI', 'nama_matkul' => 'Metodologi Penelitian', 'id_prodi' => 1],
            ['kode_matkul' => 'PCVK_TI', 'nama_matkul' => 'Pengolahan Citra dan Visi Komputer', 'id_prodi' => 1],
            ['kode_matkul' => 'PEMB_MESIN_TI', 'nama_matkul' => 'Pembelajaran Mesin', 'id_prodi' => 1],
            ['kode_matkul' => 'PEMR_MOB_TI', 'nama_matkul' => 'Pemrograman Mobile', 'id_prodi' => 1],

            // Mata kuliah untuk Sistem Informasi Bisnis
            ['kode_matkul' => 'APSO_SIB', 'nama_matkul' => 'Analisis dan Perancangan Sistem Informasi', 'id_prodi' => 2],
            ['kode_matkul' => 'AUDSI_SIB', 'nama_matkul' => 'Audit Sistem Informasi', 'id_prodi' => 2],
            ['kode_matkul' => 'KECBIS_SIB', 'nama_matkul' => 'Kecerdasan Bisnis', 'id_prodi' => 2],
            ['kode_matkul' => 'METPEN_SIB', 'nama_matkul' => 'Metodologi Penelitian', 'id_prodi' => 2],
            ['kode_matkul' => 'PEMR_WEB_LNJT_SIB', 'nama_matkul' => 'Pemrograman Web Lanjut', 'id_prodi' => 2],
            ['kode_matkul' => 'PMPL_SIB', 'nama_matkul' => 'Penjaminan Mutu Perangkat Lunak', 'id_prodi' => 2],
            ['kode_matkul' => 'WS_SIB', 'nama_matkul' => 'Workshop', 'id_prodi' => 2],
            ['kode_matkul' => 'PEMR_MOB_SIB', 'nama_matkul' => 'Pemrograman Mobile', 'id_prodi' => 2],
        ]);
    }
}
