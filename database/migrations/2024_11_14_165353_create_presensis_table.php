<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jadwal')->constrained('jadwals')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('id_mahasiswa')->constrained('mahasiswas')->onDelete('restrict')->onUpdate('restrict');
            $table->smallInteger('pertemuan_ke');
            $table->date('tanggal_presensi');
            $table->enum('status_presensi', ['hadir', 'alpha']);
            $table->string('tahun_ajaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};
