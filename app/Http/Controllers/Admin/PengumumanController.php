<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
   
    public function index()
    {
        $pengumumans = Pengumuman::latest('id')->get();
       return view('admin.pengumuman.index', compact('pengumumans'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
        ]);
        
        $pengumuman = Pengumuman::create([
            'judul' => $request->judul,
            
        ]);
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = time() . '_' . $pengumuman->nama . '.' . $img->getClientOriginalExtension();
            $pengumuman->img = $file_name;
            $pengumuman->update();
            $img->move('../public/assets/img/', $file_name);
        }


        return back()->with('sukses', 'Berhasil Tambah pengumuman!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required'
        ]);
    
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->update($request->all());
    
        return back()->with('sukses', 'Berhasil Edit Data Pengumuman!');
    }
    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();
    
        return back()->with('sukses', 'Data pengumuman berhasil dihapus.');
    }
}
