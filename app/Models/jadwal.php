<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';

    const STATUS_TIDAK_AKTIF = '0';
    const STATUS_AKTIF = '1';
    
    protected $fillable = [
        'id_kelas',
        'id_matkul_dosen',
        'hari',
        'waktu_mulai',
        'waktu_selesai',
        'ruang_kelas',
        'status',
    ];

    // Helper untuk status deskriptif
    public function getStatusLabelAttribute()
    {
        return $this->status == self::STATUS_AKTIF ? 'Aktif' : 'Tidak Aktif';
    }
    
    /**
     * Relasi ke model `Kelas`
     */
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
    
    /**
     * Relasi ke model `MatkulDosen`
     */
    public function matkulDosen()
    {
        return $this->belongsTo(MatkulDosen::class, 'id_matkul_dosen')->with(['dosen', 'mataKuliah']);
    }

    /**
     * Relasi ke model `MataKuliah`
     */
    // public function mataKuliah()
    // {
    //     return $this->belongsTo(MataKuliah::class, 'id_matkul');
    // }

    /**
     * Relasi ke model `Dosen`
     */
    // public function dosen()
    // {
    //     return $this->belongsTo(Dosen::class, 'id_dosen');
    // }

}
