<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkulDosen extends Model
{
    use HasFactory;
    protected $table = 'matkul_dosens';
    protected $fillable = [
        'id_matkul',
        'id_dosen',
    ];
    public function dosens()
    {
        return $this->belongsToMany(Dosen::class, 'matkul_dosens', 'id_matkul', 'id_dosen')
                    ->using(MatkulDosen::class);
    }

    public function mataKuliahs()
    {
        return $this->belongsToMany(MataKuliah::class, 'matkul_dosens', 'id_dosen', 'id_matkul')
                    ->using(MatkulDosen::class);
    }
}
