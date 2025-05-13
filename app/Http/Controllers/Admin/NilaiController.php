<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalPelajaran;
use App\Models\Jurusan;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Semester;
use App\Models\User;
use Illuminate\Http\Request;

class NilaiController extends Controller
{

    public function index()
    {

        $jurusans = Jurusan::all();
        return view('admin.nilai.index', compact('jurusans'));
    }
    public function show(Request $request, $id)
    {
        $kelas     = Jurusan::findOrFail($id);
        $gurus     = User::where('roles_id', 2)->get();
        $semesters = Semester::all();
        $jadwals   = JadwalPelajaran::query()->with(['Mapel'])->where('id_kelas', $id)->get();
        $nilais    = Nilai::query()
            ->whereRelation('Guru', 'users.id', auth()->id())
            ->with(
                [
                    'Siswa',
                    'Guru',
                ]
            )->get();

        $students = User::where('roles_id', 3)->where('id_kelas', $id)->get();
        $mapels   = Mapel::query()
            ->whereRelation('gurus', 'users.id', auth()->id())
            ->get();

        // dd($nilais);

        return view('admin.nilai.tabelnilai', compact('nilais', 'semesters', 'gurus', 'jadwals', 'kelas', 'students', 'mapels'));
    }

    public function nilai()
    {
        $nilais = Nilai::all();
        return view('admin.nilai.nilai', compact('nilais'));
    }

    public function tabel()
    {

        $gurus     = User::where('roles_id', 2)->get();
        $semesters = Semester::all();
        $jadwals   = JadwalPelajaran::all();
        $nilais    = Nilai::all();
        return view('admin.nilai.tabelnilai', compact('nilais', 'semesters', 'gurus', 'jadwals'));
    }

    public function update(Request $request, $id)
    {

        $nilai = Nilai::findOrFail($id);
        $request->validate([
            'id_guru'    => 'required',
            'tugas'      => 'required',
            'uts'        => 'required',
            'uas'        => 'required',
            'keterangan' => 'required',
        ]);

        $nilai->update([
            'id_guru'    => $request->id_guru,
            'tugas'      => $request->tugas,
            'uts'        => $request->uts,
            'uas'        => $request->uas,
            'keterangan' => $request->keterangan,
        ]);

        return back()->with('sukses', 'Berhasil Edit Data Nilai!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_siswa' => 'required',
            'id_mapel' => 'required',
        ]);

        Nilai::create([
            'id_siswa'    => $request->id_siswa,
            'id_guru'     => auth()->id(),
            'id_mapel'    => $request->id_mapel,
            'semester_id' => Semester::where('is_active', 1)->first()->id,
        ]);

        return back()->with('sukses', 'Berhasil Tambah Data Nilai!');
    }
}
