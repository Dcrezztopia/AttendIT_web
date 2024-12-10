<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $table = 'presensis';

    protected $fillable = [
        'id_jadwal',
        'id_mahasiswa',
        'pertemuan_ke',
        'tanggal_presensi',
        'status_presensi',
        'tahun_ajaran',
    ];

    // Define relationships if needed
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }
}
