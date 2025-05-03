<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jurusan;

class ProfilController extends Controller
{
    public function edit(string $id)
    {
        $kelass = Jurusan::all();
        $user = User::where('id', auth()->user()->id )->firstOrFail();
        return view('admin.profil.update', compact('user','kelass'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_induk' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->update($request->all());

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $file_name = time() . '_' . $user->nama . '.' . $file->getClientOriginalExtension();
            $user->img = $file_name;
            $user->update();
            $file->move('../public/assets/file/', $file_name);
        }

            return back()->with('sukses', 'Berhasil Update Profil!');
    }
}
