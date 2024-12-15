<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    /**
     * Get presensi data for the logged-in user.
     */
    public function getPresensiHistories()
    {
        $user = Auth::user();

        // Check if the user is a student
        if ($user->role !== 'mahasiswa') {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Get the student's presensi data
        $presensi = Presensi::where('id_mahasiswa', $user->mahasiswa->id)
            ->with(['jadwal.kelas', 'jadwal.matkulDosen.dosen', 'jadwal.matkulDosen.mataKuliah'])
            ->get()
            ->map(function ($presensi) {
                return [
                    'id' => $presensi->id,
                    'pertemuan_ke' => $presensi->pertemuan_ke,
                    'tanggal_presensi' => $presensi->tanggal_presensi,
                    'status_presensi' => $presensi->status_presensi,
                    'tahun_ajaran' => $presensi->tahun_ajaran,
                    'jadwal' => [
                        'hari' => $presensi->jadwal->hari,
                        'waktu_mulai' => $presensi->jadwal->waktu_mulai,
                        'waktu_selesai' => $presensi->jadwal->waktu_selesai,
                        'ruang_kelas' => $presensi->jadwal->ruang_kelas,
                        'nama_dosen' => $presensi->jadwal->matkulDosen->dosen->nama_dosen ?? null,
                        'nama_matkul' => $presensi->jadwal->matkulDosen->mataKuliah->nama_matkul ?? null,
                    ],
                ];
            });

        return response()->json(['presensi' => $presensi]);
    }

    /**
     * Get presensi statistics for the logged-in user.
     */
    public function getPresensiStatistics()
    {
        $user = Auth::user();

        // Check if the user is a student
        if ($user->role !== 'mahasiswa') {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Calculate the statistics
        $statistics = Presensi::where('id_mahasiswa', $user->mahasiswa->id)
            ->selectRaw('status_presensi, COUNT(*) as count')
            ->groupBy('status_presensi')
            ->pluck('count', 'status_presensi');

        // Ensure all statuses are present in the response
        $allStatuses = ['hadir', 'alpha', 'izin', 'sakit'];
        $statistics = collect($allStatuses)->mapWithKeys(function ($status) use ($statistics) {
            return [$status => $statistics->get($status, 0)];
        });

        return response()->json(['statistics' => $statistics]);
    }
} 