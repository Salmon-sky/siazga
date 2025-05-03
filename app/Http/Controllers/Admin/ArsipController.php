<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jurusan;

class ArsipController extends Controller
{
    
   
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('admin.arsip.index', compact('jurusans'));
    }
    public function show(Request $request, $id)
    {

        $arsips = User::where('roles_id',3)->latest('id')->get();
        $kelas = Jurusan::findOrFail($id);
       return view('admin.arsip.tabelarsip',  compact('arsips', 'kelas'));
    }

    public function arsip()
    {
        $arsip = User::where('id', auth()->user()->id )->firstOrFail();
        return view('admin.arsip.arsip', compact('arsip'));
    }


    public function update(Request $request, $id)
    {
        $arsip = User::findOrFail($id);
        $request->validate([
            'file_eraport' => 'max:2048',
            'file_sertifikat' => 'max:2048',
        ]);
    
        if ($request->hasFile('file_eraport')) {
            $file_eraport = $request->file('file_eraport');
            $file_name = time() . '_' . $arsip->nama . '.' . $file_eraport->getClientOriginalExtension();
            $arsip->file_eraport = $file_name;
            $arsip->update();
            $file_eraport->move('../public/assets/file_eraport/', $file_name);
        }
        if ($request->hasFile('file_sertifikat')) {
            $file_sertifikat = $request->file('file_sertifikat');
            $file_name = time() . '_' . $arsip->nama . '.' . $file_sertifikat->getClientOriginalExtension();
            $arsip->file_sertifikat = $file_name;
            $arsip->update();
            $file_sertifikat->move('../public/assets/file_sertifikat/', $file_name);
        }
    
        return back()->with('sukses', 'Berhasil Edit Data Arsip!');
    }
 
}
