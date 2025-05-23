<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalPelajaran;
use App\Models\Jurusan;
use App\Models\Presensi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresensiController extends Controller
{

    public function index(Request $request)
    {
        // DB::enableQueryLog();
        $jadwals = JadwalPelajaran::query()
            ->with(['Mapel', 'Jurusan'])
            ->where('id_guru', auth()->id())
            ->get();

        $siswas         = collect();
        $selectedJadwal = null;

        if ($request->has('id_jadwal')) {
            $selectedJadwal = JadwalPelajaran::find($request->get('id_jadwal'));

            if ($selectedJadwal) {
                $siswas = User::query()
                    ->where('roles_id', 3)
                    ->where('id_kelas', $selectedJadwal->id_kelas)
                    ->get()
                    ->map(function ($siswa) use ($selectedJadwal, $request) {
                        // dd($request->get('tanggal'));
                        $siswa->presensi = Presensi::query()
                            ->where('id_jadwal', $selectedJadwal->id)
                            ->where('id_siswa', $siswa->id)
                            ->where('tanggal', $request->get('tanggal'))
                        // ->toSql()
                        // ->dd()
                            ->first()
                        ;
                        // dd($siswa->presensi);
                        return $siswa;
                    });
            }
        }
        // dd(DB::getQueryLog());
        // dd($siswas);

        return view('admin.presensi.index', compact('jadwals', 'siswas', 'selectedJadwal'));
    }

    public function show(Request $request, $id)
    {

        $presensis = Presensi::all();
        $kelas     = Jurusan::findOrFail($id);
        return view('admin.presensi.tabelpresensi', compact('presensis', 'kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_siswa'  => 'required',
            'id_jadwal' => 'required',
            'status'    => 'required',
        ]);

        $jadwal = JadwalPelajaran::findOrFail($request->id_jadwal);

        Presensi::create([
            'id_siswa'  => $request->id_siswa,
            'id_mapel'  => $jadwal->id_mapel,
            'tanggal'   => $request->tanggal,
            'status'    => $request->status,
            'id_jadwal' => $request->id_jadwal,
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
