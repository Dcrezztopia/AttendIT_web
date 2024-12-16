<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'role' => 'required|string|in:mahasiswa,admin,dosen', // Validasi role yang diperbolehkan
            'password' => 'required|string|min:3',
            'nim' => 'required_if:role,mahasiswa|string|unique:mahasiswas',
            'nama_mahasiswa' => 'required_if:role,mahasiswa|string|max:255',
            'prodi' => 'required_if:role,mahasiswa|string|max:255',
            'id_kelas' => 'required_if:role,mahasiswa|exists:kelas,id',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Add photo validation
        ]);

        // Buat user
        $user = User::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
        ]);

        // Jika role mahasiswa, buat data di tabel mahasiswa
        if ($validated['role'] === 'mahasiswa') {
            // Handle photo upload
            $fotoPath = null;
            if ($request->hasFile('foto')) {
                $foto = $request->file('foto');
                $fotoPath = $foto->store('public/profile-photos');
                // Convert storage path to URL path
                $fotoPath = str_replace('public/', 'storage/', $fotoPath);
            }

            $user->mahasiswa()->create([
                'nim' => $validated['nim'],
                'nama_mahasiswa' => $validated['nama_mahasiswa'],
                'prodi' => $validated['prodi'],
                'id_kelas' => $validated['id_kelas'],
                'foto' => $fotoPath,
            ]);
        }

        return response()->json([
            'user' => $user,
            'token' => $user->createToken('mobile_app')->plainTextToken,
            'message' => 'User registered successfully',
            'foto_url' => $fotoPath,
        ], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $user = Auth::user();
        // $token = $user->createToken('mobile_app')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $user->createToken('mobile_app')->plainTextToken,
        ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    }

    public function getProfileMahasiswa(Request $request)
    {
        $user = $request->user();
        $baseUrl = url('/');

        // Default response structure
        $response = [
            'user' => $user,
            'mahasiswa' => null,
        ];

        if ($user->role === 'mahasiswa') {
            $mahasiswa = $user->mahasiswa()->with('kelas')->first();
            if ($mahasiswa) {
                $response['mahasiswa'] = [
                    'id' => $mahasiswa->id,
                    'nama_mahasiswa' => $mahasiswa->nama_mahasiswa,
                    'nim' => $mahasiswa->nim,
                    'prodi' => $mahasiswa->prodi,
                    'nama_kelas' => $mahasiswa->kelas->nama_kelas,
                    'foto_url' => $mahasiswa->foto ? asset($mahasiswa->foto) : null,
                ];
            }
        }

        return response()->json($response);
    }

}
