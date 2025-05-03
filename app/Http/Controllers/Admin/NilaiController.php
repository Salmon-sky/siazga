<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalPelajaran;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Nilai;
use App\Models\Semester;
use App\Models\Mapel;

class NilaiController extends Controller
{

    public function index()
    {

        $jurusans = Jurusan::all();
        return view('admin.nilai.index', compact('jurusans'));
    }
    public function show(Request $request, $id)
    {
        $kelas = Jurusan::findOrFail($id);
        $gurus = User::where('roles_id', 2)->latest('id')->get();
        $semesters = Semester::all();
        $jadwals = JadwalPelajaran::all();
        $nilais = Nilai::query()->with(['Siswa'])->get();
        // dd($nilais);

        return view('admin.nilai.tabelnilai', compact('nilais', 'semesters', 'gurus', 'jadwals', 'kelas'));
    }

    public function nilai()
    {
        $nilais = Nilai::all();
        return view('admin.nilai.nilai', compact('nilais'));
    }

    public function tabel()
    {

        $gurus = User::where('roles_id', 2)->get();
        $semesters = Semester::all();
        $jadwals = JadwalPelajaran::all();
        $nilais = Nilai::all();
        return view('admin.nilai.tabelnilai', compact('nilais', 'semesters', 'gurus', 'jadwals'));
    }


    public function update(Request $request, $id)
    {

        $nilai = Nilai::findOrFail($id);
        $request->validate([
            'id_guru' => 'required',
            'tugas' => 'required',
            'uts' => 'required',
            'uas' => 'required',
            'keterangan' => 'required',
        ]);

        $nilai->update([
            'id_guru' => $request->id_guru,
            'tugas' => $request->tugas,
            'uts' => $request->uts,
            'uas' => $request->uas,
            'keterangan' => $request->keterangan,
        ]);

        return back()->with('sukses', 'Berhasil Edit Data Nilai!');
    }
}
