<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [AuthController::class, 'getProfileMahasiswa']);
    Route::get('/jadwal', [JadwalController::class, 'getJadwal']);
    Route::post('/presensi/submit', [PresensiController::class, 'store']);
    Route::get('/presensi/riwayat', [PresensiController::class, 'getPresensiHistories']);
    Route::get('/presensi/statistik', [PresensiController::class, 'getPresensiStatistics']);
    Route::post('/user/reset-password', [UserController::class, 'resetPassword']);
});
