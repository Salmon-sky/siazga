<?php

use App\Http\Controllers\Admin\ArsipController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\JadwalPelajaranController;
use App\Http\Controllers\Admin\JadwalPribadiController;
use App\Http\Controllers\Admin\MapelController;
use App\Http\Controllers\Admin\NilaiController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\PresensiController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Guru;
use App\Http\Middleware\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/mapel', [MapelController::class, 'index'])->name('mapel');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // CMS ADMIN
    Route::middleware([Admin::class])->name('admin.')->prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // CRUD USER SISWA
        Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
        Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
        Route::post('/siswa/import', [SiswaController::class, 'import'])->name('siswa.import');
        Route::put('/siswa/{id}/update', [SiswaController::class, 'update'])->name('siswa.update');
        Route::delete('/siswa/{id}/destroy', [SiswaController::class, 'destroy'])->name('siswa.destroy');

        // CRUD USER GURU
        Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
        Route::post('/guru/import', [GuruController::class, 'import'])->name('guru.import');
        Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');
        Route::put('/guru/{id}/update', [GuruController::class, 'update'])->name('guru.update');
        Route::delete('/guru/{id}/destroy', [GuruController::class, 'destroy'])->name('guru.destroy');

        //CRUD PENGUMUMAN
        Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
        Route::post('/pengumuman', [PengumumanController::class, 'store'])->name('pengumuman.store');
        Route::put('/pengumuman/{id}/update', [PengumumanController::class, 'update'])->name('pengumuman.update');
        Route::delete('/pengumuman/{id}/destroy', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');

        // CRUD JADWAL
        Route::get('/jadwal', [JadwalPelajaranController::class, 'index'])->name('jadwal.index');
        Route::post('/jadwal', [JadwalPelajaranController::class, 'store'])->name('jadwal.store');
        Route::put('/jadwal/{id}/update', [JadwalPelajaranController::class, 'update'])->name('jadwal.update');
        Route::delete('/jadwal/{id}/destroy', [JadwalPelajaranController::class, 'destroy'])->name('jadwal.destroy');

        //CRUD SEMESTER
        Route::get('/semester', [SemesterController::class, 'index'])->name('semester.index');
        Route::post('/semester', [SemesterController::class, 'store'])->name('semester.store');
        Route::put('/semester/{id}/update', [SemesterController::class, 'update'])->name('semester.update');
        Route::delete('/semester/{id}/destroy', [SemesterController::class, 'destroy'])->name('semester.destroy');
    });

    // CMS Guru
    Route::middleware([Guru::class])->name('guru.')->prefix('guru')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // CMS NILAI
        Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
        Route::post('/nilai', [NilaiController::class, 'store'])->name('nilai.store');
        Route::get('/tabel-nilai/{id}', [NilaiController::class, 'show'])->name('nilai.tabel');
        Route::put('/tabel-nilai/{id}/update', [NilaiController::class, 'update'])->name('nilai.update');

        // CMS ARSIP
        Route::get('/arsip', [ArsipController::class, 'index'])->name('arsip.index');
        Route::get('/tabel-arsip/{id}', [ArsipController::class, 'show'])->name('arsip.tabel');
        Route::put('/tabel-arsip/{id}/update', [ArsipController::class, 'update'])->name('arsip.update');

        // CMS PRESENSI
        Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi.index');
        Route::get('/tabel-presensi/{id}', [PresensiController::class, 'show'])->name('presensi.tabel');
        Route::put('/tabel-presensi/{id}/update', [PresensiController::class, 'update'])->name('presensi.update');

        // View Jadwal
        Route::get('/jadwal', [JadwalPelajaranController::class, 'jadwal'])->name('jadwal.jadwal');

        // view profil
        Route::get('/profil/{id}', [ProfilController::class, 'edit'])->name('profil.edit');
        Route::put('/profil/{id}', [ProfilController::class, 'update'])->name('profil.update');
    });
    // CMS Siswa
    Route::middleware([Siswa::class])->name('siswa.')->prefix('siswa')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // view dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // view pengumuman
        Route::get('/jadwal', [JadwalPelajaranController::class, 'jadwal'])->name('jadwal.jadwal');

        //view semester
        Route::get('/semester', [SemesterController::class, 'semester'])->name('semester.semester');

        //view detail
        Route::get('/semester/{id}', [SemesterController::class, 'detail'])->name('semester.detail');

        // view nilai
        Route::get('/nilai', [NilaiController::class, 'nilai'])->name('nilai.nilai');

        // view pengumuman
        Route::get('/pengumuman', [PengumumanController::class, 'pengumuman'])->name('pengumuman.pengumuman');

        // view arsip
        Route::get('/arsip', [ArsipController::class, 'arsip'])->name('arsip.arsip');

        // view profil

        Route::get('/profil/{id}', [ProfilController::class, 'edit'])->name('profil.edit');
        Route::put('/profil/{id}', [ProfilController::class, 'update'])->name('profil.update');
    });
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/data-guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/data-siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/jadwal', [JadwalPelajaranController::class, 'index'])->name('jadwal.index');
Route::get('/semester', [SemesterController::class, 'index'])->name('semester.index');
Route::get('/arsip', [ArsipController::class, 'index'])->name('arsip.index');
Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi.index');
Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/mapel', [MapelController::class, 'index'])->name('mapel.index');
Route::get('/jadwal-pribadi', [JadwalPribadiController::class, 'index'])->name('jadwal-pribadi.index');
Route::get('/forgot-password', [ForgotPasswordController::class, 'forgot_password'])->name('forgot-password');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
