<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalPelajaran;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mapel;
use App\Models\Jurusan;
use App\Models\Presensi;

class PresensiController extends Controller
{

    public function index(Request $request)
    {
        // dd($request->all());
        $jadwals = JadwalPelajaran::query()
            ->with(['Mapel', 'Jurusan'])
            ->where('id_guru', auth()->id())
            ->get();
        $siswas = [];
        // if ($request->has('id_jadwal')) {
        //     $selectedJadwal =  JadwalPelajaran::find($request->id_jadwal);
        //     dd($selectedJadwal);
        // }
        if ($request->has('id_jadwal')) {
            $siswas = User::query()
                ->when($request->has('id_jadwal'), function ($query) use ($request) {
                    $query->whereRelation('Kelas', 'users.id_kelas', JadwalPelajaran::find($request->id_jadwal)->id_kelas);
                })
                ->with(
                    [
                        'presensis'  => function ($query) use ($request) {
                            $query->where('id_jadwal', $request->id_jadwal)->where('tanggal', $request->get('tanggal') ?? now()->format('Y-m-d'));
                        }
                    ]
                )
                ->get()
                ->map(function ($siswa) {
                    $siswa->presensi = $siswa->presensis->first();
                    return $siswa;
                })->collect();
        }

        dd($siswas);
        return view('admin.presensi.index', compact('jadwals', 'siswas'));
    }
    public function show(Request $request, $id)
    {

        $presensis = Presensi::all();
        $kelas = Jurusan::findOrFail($id);
        return view('admin.presensi.tabelpresensi', compact('presensis', 'kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_jadwal' => 'required',
            'status' => 'required',
        ]);

        $jadwal = JadwalPelajaran::findOrFail($request->id_jadwal);

        Presensi::create([
            'id_siswa'  => auth()->id(),
            'id_mapel'  => $jadwal->id_mapel,
            'tanggal'   => $request->tanggal,
            'status'    => $request->status,
        ]);
        return back()->with('sukses', 'Berhasil Tambah Data Presensi!');
    }


    public function update(Request $request, $id)
    {

        $presensi = Presensi::findOrFail($id);
        $request->validate([
            'status' => 'required',
        ]);

        $presensi->update([
            'status' => $request->status,
        ]);

        return back()->with('sukses', 'Berhasil Edit Data Presensi!');
    }
}
