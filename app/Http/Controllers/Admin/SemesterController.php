<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Semester;
use App\Models\Nilai;

class SemesterController extends Controller
{
   
    public function index()
    {
        $semesters = Semester::latest('id')->get();
       return view('admin.semester.index', compact('semesters'));
    }
    public function semester()
    {
        $semesters = Semester::latest('id')->get();
       return view('admin.semester.semester', compact('semesters'));
    }
    public function show(Request $request, $id)
    {

        $nilais = Nilai::latest('id')->get();
        $semester = Semester::findOrFail($id);
       return view('admin.semester.detail', compact('nilais', 'semester'));
    }

    public function detail(Request $request, $id)
    {

        $nilais = Nilai::all();
        $semester = Semester::findOrFail($id);
       return view('admin.semester.detail', compact('nilais', 'semester'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        
        $semester = Semester::create([
            'nama' => $request->nama,
            
        ]);


        return back()->with('sukses', 'Berhasil Tambah semester!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required'
        ]);
    
        $semester = Semester::findOrFail($id);
        $semester->update($request->all());
    
        return back()->with('sukses', 'Berhasil Edit Data semester!');
    }
    public function destroy($id)
    {
        $semester = Semester::findOrFail($id);
        $semester->delete();
    
        return back()->with('sukses', 'Data semester berhasil dihapus.');
    }
}
