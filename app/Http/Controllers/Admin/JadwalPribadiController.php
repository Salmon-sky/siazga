<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalPelajaran;
use App\Models\Jurusan;
use App\Models\User;
use App\Models\Mapel;


class JadwalPribadiController extends Controller
{

    public function index()
    {
        $haris = [
            [
                'nama' => 'Senin',
            ],
            [
                'nama' => 'Selasa',
            ],
            [
                'nama' => 'Rabu',
            ],
            [
                'nama' => 'Kamis',
            ],
            [
                'nama' => 'Jumat',
            ],

        ];

        $gurus = User::where('roles_id', 2)->get();
        $kelass = Jurusan::all();
        $mapels = Mapel::all();
        $jadwals = JadwalPelajaran::all();
        return view('admin.jadwalpribadi.index', compact('jadwals', 'kelass', 'gurus', 'mapels', 'haris'));
    }
    public function jadwal()
    {
        $jadwals = JadwalPelajaran::query()->with(
            [
                'Mapel',
            ]
        )->orderBy('jam_ke')->get();
        // dd($jadwals[0]);
        return view('admin.jadwalpribadi.index', compact('jadwals'));
    }



    public function store(Request $request)
    {
        // dd($request->input());
        $validated = $request->validate([
            'jam_ke' => 'required',
            'id_mapel' => 'required',
            'id_guru' => 'required',
            'id_kelas' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);
        // dd($validated);

        $jadwal = JadwalPelajaran::create($validated);
        // dd($siswa);

        return back()->with('sukses', 'Berhasil Tambah jadwal!');
    }

    public function destroy($id)
    {
        $jadwal = JadwalPelajaran::findOrFail($id);
        $jadwal->delete();

        return back()->with('sukses', 'Data jadwal berhasil dihapus.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'jam_ke' => 'required',
            'id_mapel' => 'required',
            'id_guru' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        $jadwal = JadwalPelajaran::findOrFail($id);
        $jadwal->update($request->all());

        return back()->with('sukses', 'Berhasil Edit Data jadwal!');
    }
}
