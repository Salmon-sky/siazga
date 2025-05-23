<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\UserImport;
use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class SiswaController extends Controller
{

    public function index()
    {
        $kelass = Jurusan::all();
        $siswas = User::where('roles_id', 3)->latest('id')->get();
        return view('admin.siswa.index', compact('siswas', 'kelass'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'        => 'required',
            'nomor_induk' => 'required|unique:users,nomor_induk',
            'no_hp'       => 'required|unique:users,no_hp',
            'id_kelas'    => 'required',
            'email'       => 'required|email|unique:users,email',
            'password'    => 'required|min:8',
        ]);

        $siswa = User::create([
            'nama'        => $request->nama,
            'roles_id'    => 3,
            'nomor_induk' => $request->nomor_induk,
            'no_hp'       => $request->no_hp,
            'id_kelas'    => $request->id_kelas,
            'email'       => $request->email,
            'password'    => Hash::make($request->password),
            'status'      => 'aktif',
            'updated_at'  => now(),
            'created_at'   => now(),
        ]);

        return back()->with(
            [
                'sukses' => 'Berhasil Tambah siswa!',
            ]
        );
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('file');
        Excel::import(new UserImport, $file);
        return back()->with('message', 'Berhasil Import Data User!');
    }

    public function destroy($id)
    {
        $siswa = User::findOrFail($id);
        $siswa->delete();

        return back()->with('sukses', 'Data siswa berhasil dihapus.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'        => 'required',
            'nomor_induk' => 'required|unique:users,nomor_induk,' . $id,
            'no_hp'       => 'required|unique:users,no_hp,' . $id,
            'email'       => 'required|email|unique:users,email,' . $id,
            'password'    => 'nullable|min:8',
        ]);

        $siswa = User::findOrFail($id);
        $siswa->update($request->all());

        return back()->with('sukses', 'Berhasil Edit Data Siswa!');
    }
}
