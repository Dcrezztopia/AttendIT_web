<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';
    protected $fillable = [
        'id_kelas',
        'id_matkul',
        'id_dosen',
        'hari',
        'waktu_mulai',
        'waktu_selesai',
        'ruang_kelas',
    ];
    
    /**
     * Relasi ke model `Kelas`
     */
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    /**
     * Relasi ke model `MataKuliah`
     */
    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'id_matkul');
    }

    /**
     * Relasi ke model `Dosen`
     */
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }
}
