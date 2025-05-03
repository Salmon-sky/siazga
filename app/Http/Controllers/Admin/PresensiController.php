<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mapel;
use App\Models\Jurusan;
use App\Models\Presensi;

class PresensiController extends Controller
{

    public function index()
    {
        $jurusans = Jurusan::all();
       return view('admin.presensi.index',compact('jurusans'));
    }
    public function show(Request $request, $id)
    {

        $presensis = Presensi::all();
        $kelas = Jurusan::findOrFail($id);
       return view('admin.presensi.tabelpresensi', compact('presensis', 'kelas'));
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
