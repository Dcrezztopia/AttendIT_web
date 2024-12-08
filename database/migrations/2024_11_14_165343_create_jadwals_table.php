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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kelas')->constrained('kelas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('id_matkul_dosen')->constrained('matkul_dosens')->onDelete('restrict')->onUpdate('restrict');
            $table->enum('hari', ['Senin','Selasa','Rabu','Kamis','Jumat']);
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('ruang_kelas', 50);
            $table->enum('status', ['0','1']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
