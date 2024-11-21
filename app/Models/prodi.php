<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodis';

    protected $fillable = ['nama_prodi'];

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'id_prodi');
    }
    public function mataKuliahs(){
        return $this->hasMany(MataKuliah::class, 'id_prodi');
    }
}
