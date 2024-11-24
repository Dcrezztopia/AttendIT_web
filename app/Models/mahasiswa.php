<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';
    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'foto',
        'prodi',
        'id_user',
        'id_kelas',
    ];

    public static function boot() 
    { 
        parent::boot(); 

        static::creating(function ($mahasiswa) { 
            // Ambil id_prodi dari tabel kelas 
            $kelas = Kelas::find($mahasiswa->id_kelas); 
            if ($kelas) { 
                $prodi = Prodi::find($kelas->id_prodi); 
                if ($prodi) { 
                    $mahasiswa->prodi = $prodi->nama_prodi; 
                } 
            } 
        }); 
    }

    public function prodi() 
    {
        return $this->hasOneThrough(Prodi::class, Kelas::class, 'id_prodi', 'id', 'id_kelas', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
