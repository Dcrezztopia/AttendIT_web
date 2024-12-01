<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function getJadwal()
    {
        $user = Auth::user();

        $jadwals = Jadwal::with(['kelas', 'matkulDosen.dosen', 'matkulDosen.mataKuliah'])
        ->where('id_kelas', $user->mahasiswa->id_kelas)
        ->get();

        return response()->json([
            'jadwals' => $jadwals,
        ]);
    }
}
