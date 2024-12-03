<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens';
    protected $fillable = [
        'nidn',
        'nama_dosen',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function mataKuliahs()
    {
        return $this->belongsToMany(MataKuliah::class, 'matkul_dosens', 'id_dosen', 'id_matkul');
    }

}
