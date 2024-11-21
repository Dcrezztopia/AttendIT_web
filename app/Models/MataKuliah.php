<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliahs';
    protected $fillable = [
        'nama_matkul',
        'id_prodi',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi');
    }

    public function dosens()
    {
        return $this->belongsToMany(Dosen::class, 'matkul_dosens', 'id_matkul', 'id_dosen');
    }
}
