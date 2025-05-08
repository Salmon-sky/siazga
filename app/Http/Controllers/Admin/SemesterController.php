<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nilai;
use App\Models\Scopes\BySemesterScope;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $nilais   = Nilai::latest('id')->get();
        $semester = Semester::findOrFail($id);
        return view('admin.semester.detail', compact('nilais', 'semester'));
    }

    public function detail(Request $request, $id)
    {

        $semester = Semester::findOrFail($id);
        $nilais   = Nilai::withoutGlobalScope( BySemesterScope::class)
            ->where('semester_id', $semester->id)
            ->with('Siswa')
            ->get();
        return view('admin.semester.detail', compact('nilais', 'semester'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:semester,nama',
        ], [
            'nama.unique' => 'Nama semester sudah digunakan.',
        ]);
        try {
            //code...
            DB::beginTransaction();
            Semester::where('is_active', 1)->update(['is_active' => 0]);
            Semester::create([
                'nama'      => $request->nama,
                'is_active' => true,
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            return back()->with('gagal', 'Gagal Tambah Semester!');
        }

        return back()->with('sukses', 'Berhasil Tambah Semester!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'      => 'required|unique:semester,nama,' . $id,
            'is_active' => 'required',
        ], [
            'nama.unique' => 'Nama semester sudah digunakan.',
        ]);

        $semester = Semester::findOrFail($id);
        try {
            DB::beginTransaction();
            if ($request->is_active == 1) {
                Semester::where('is_active', 1)->update(['is_active' => 0]);
            }

            $semester->update([
                'nama'      => $request->nama,
                'is_active' => $request->is_active,
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            return back()->with('gagal', 'Gagal Edit Semester!');
        }

        return back()->with('sukses', 'Berhasil Edit Data Semester!');
    }
    public function destroy($id)
    {
        $semester = Semester::findOrFail($id);
        $semester->delete();

        return back()->with('sukses', 'Data semester berhasil dihapus.');
    }
}
