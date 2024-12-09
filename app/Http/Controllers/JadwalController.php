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
        ->get()
        ->map(function ($jadwal) {
            return [
                'id' => $jadwal->id,
                'hari' => $jadwal->hari,
                'waktu_mulai' => $jadwal->waktu_mulai,
                'waktu_selesai' => $jadwal->waktu_selesai,
                'ruang_kelas' => $jadwal->ruang_kelas,
                'status' => $jadwal->status,
                'nama_dosen' => $jadwal->matkulDosen->dosen->nama_dosen ?? null,
                'nama_matkul' => $jadwal->matkulDosen->mataKuliah->nama_matkul ?? null,
            ];
        });

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
