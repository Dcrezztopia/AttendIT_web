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
        // ->where('status', 1)
        ->get();

        return response()->json([
            'jadwals' => $jadwals,
        ]);

    }

    public function updateStatus($id)
    {
        $jadwal = Jadwal::findOrFail($id);

        // Toggle status: jika aktif (1), ubah menjadi tidak aktif (0), dan sebaliknya
        $jadwal->status = $jadwal->status == 1 ? 0 : 1;
        $jadwal->save();

        return response()->json([
            'message' => 'Status jadwal berhasil diperbarui',
            'jadwal' => [
                'id' => $jadwal->id,
                'status' => $jadwal->status,
                'status_label' => $jadwal->status_label,
            ],
        ]);
    }

    
}
