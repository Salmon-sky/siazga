<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalPelajaran;
use App\Models\Jurusan;
use App\Models\User;
use App\Models\Mapel;


class JadwalPelajaranController extends Controller
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
        return view('admin.jadwal.index', compact('jadwals', 'kelass', 'gurus', 'mapels', 'haris'));
    }
    public function jadwal()
    {
        $jadwals = JadwalPelajaran::query()->with(
            [
                'Mapel',
            ]
        )->orderBy('jam_ke')->get();
        // dd($jadwals[0]);
        return view('admin.jadwal.jadwal', compact('jadwals'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'jam_ke' => 'required',
            'id_mapel' => 'required',
            'id_guru' => 'required',
            'id_kelas' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        // Cek apakah data sudah ada
        $exists = JadwalPelajaran::where('jam_ke', $validated['jam_ke'])
            ->where('id_mapel', $validated['id_mapel'])
            ->where('id_guru', $validated['id_guru'])
            ->where('id_kelas', $validated['id_kelas'])
            ->where('hari', $validated['hari'])
            ->where('jam_mulai', $validated['jam_mulai'])
            ->where('jam_selesai', $validated['jam_selesai'])
            ->exists();

        // Jika sudah ada, kembalikan dengan pesan error
        if ($exists) {
            return back()->with('error', 'Jadwal dengan kombinasi tersebut sudah ada!');
        }

        // Simpan data jika belum ada
        JadwalPelajaran::create($validated);

        return back()->with('sukses', 'Berhasil tambah jadwal!');
    }


    public function destroy($id)
    {
        $jadwal = JadwalPelajaran::findOrFail($id);
        $jadwal->delete();

        return back()->with('sukses', 'Data jadwal berhasil dihapus.');
    }
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'jam_ke' => 'required',
            'id_mapel' => 'required',
            'id_guru' => 'required',
            'id_kelas' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        // Cari data jadwal berdasarkan ID
        $jadwal = JadwalPelajaran::findOrFail($id);

        // Cek apakah kombinasi yang diinput sudah ada di jadwal lain
        $exists = JadwalPelajaran::where('jam_ke', $request->jam_ke)
            ->where('id_mapel', $request->id_mapel)
            ->where('id_guru', $request->id_guru)
            ->where('id_kelas', $request->id_kelas)
            ->where('hari', $request->hari)
            ->where('jam_mulai', $request->jam_mulai)
            ->where('jam_selesai', $request->jam_selesai)
            ->where('id', '!=', $id) // Pastikan bukan data yang sedang diupdate
            ->exists();

        // Jika sudah ada, kembalikan dengan pesan error
        if ($exists) {
            return back()->with('error', 'Jadwal dengan kombinasi tersebut sudah ada!');
        }

        // Update data jika belum ada duplikasi
        $jadwal->update($request->all());

        return back()->with('sukses', 'Berhasil Edit Data jadwal!');
    }
}
