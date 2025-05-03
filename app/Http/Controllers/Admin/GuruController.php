<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UserImport;

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
            'nama' => 'required',
            'nomor_induk' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
        ]);

        $guru = User::create([
            'nama' => $request->nama,
            'roles_id' => 2,
            'nomor_induk' => $request->nomor_induk,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => Hash::make('password'),
        ]);

        return back()->with('sukses', 'Berhasil Tambah !');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_induk' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
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
