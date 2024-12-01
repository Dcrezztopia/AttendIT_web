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
    public function dosen() 
    { 
        return $this->belongsTo(Dosen::class, 'id_dosen'); 
    } 

    public function mataKuliah() 
    { 
        return $this->belongsTo(MataKuliah::class, 'id_matkul'); 
    }
}
