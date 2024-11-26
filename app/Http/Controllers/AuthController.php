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
            'nim' => 'required_if:role,mahasiswa|string|unique:mahasiswas', // NIM hanya wajib untuk mahasiswa
            'nama_mahasiswa' => 'required_if:role,mahasiswa|string|max:255', // Nama mahasiswa
            'prodi' => 'required_if:role,mahasiswa|string|max:255', // Prodi mahasiswa
            'id_kelas' => 'required_if:role,mahasiswa|exists:kelas,id', // Validasi id_kelas
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
            $user->mahasiswa()->create([
                'nim' => $validated['nim'],
                'nama_mahasiswa' => $validated['nama_mahasiswa'],
                'prodi' => $validated['prodi'],
                'id_kelas' => $validated['id_kelas'],
            ]);
        }

        return response()->json([
            'user' => $user,
            'token' => $user->createToken('mobile_app')->plainTextToken,
            'message' => 'User registered successfully'
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

    public function profile(Request $request)
    {
        $user = $request->user();

        // Include data mahasiswa jika user adalah mahasiswa
        if ($user->role === 'mahasiswa') {
            $mahasiswa = $user->mahasiswa()->first(); // Ambil data mahasiswa terkait
            return response()->json([
                'user' => $user,
                'mahasiswa' => $mahasiswa,
            ]);
        }

        return response()->json([
            'user' => $user,
        ]);
    }

}
