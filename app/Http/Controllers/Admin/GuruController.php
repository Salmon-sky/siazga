<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\UserImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = User::where('roles_id', 2)->latest('id')->get();
        return view('admin.guru.index', compact('gurus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'        => 'required',
            'nomor_induk' => 'required|unique:users,nomor_induk',
            'no_hp'       => 'required|unique:users,no_hp',
            'email'       => 'required|email|unique:users,email',
            'password'    => 'required|min:8',
        ], [
            'nomor_induk.unique' => 'Nomor induk sudah digunakan.',
            'no_hp.unique'       => 'Nomor handphone sudah digunakan.',
            'email.unique'       => 'Email sudah digunakan.',
        ]);

        User::create([
            'nama'        => $request->nama,
            'roles_id'    => 2,
            'nomor_induk' => $request->nomor_induk,
            'no_hp'       => $request->no_hp,
            'email'       => $request->email,
            'password'    => Hash::make($request->password),
            'status'      => 'aktif',
            'updated_at'  => now(),
            'created_at'   => now(),
        ]);

        return back()->with('sukses', 'Berhasil Tambah Guru!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'        => 'required',
            'nomor_induk' => 'required|unique:users,nomor_induk,' . $id,
            'no_hp'       => 'required|unique:users,no_hp,' . $id,
            'email'       => 'required|email|unique:users,email,' . $id,
            'password'    => 'nullable|min:8',
        ], [
            'nomor_induk.unique' => 'Nomor induk sudah digunakan.',
            'no_hp.unique'       => 'Nomor handphone sudah digunakan.',
            'email.unique'       => 'Email sudah digunakan.',
        ]);

        $guru = User::findOrFail($id);
        $guru->update($request->all());

        return back()->with('sukses', 'Berhasil Edit Data Guru!');
    }

    public function destroy($id)
    {
        $guru = User::findOrFail($id);
        $guru->delete();

        return back()->with('sukses', 'Data guru berhasil dihapus.');
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
}
