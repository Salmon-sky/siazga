<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPribadi;
use Illuminate\Support\Facades\Auth;

class JadwalPribadiController extends Controller
{
    /**
     * Display a listing of the schedule for the logged-in user with role_id 2.
     */
    public function index()
    {
        $user = Auth::user();

        if ($user && $user->role_id == 2) {
            $jadwal = JadwalPribadi::where('id_guru', $user->id)->get();
            return view('jadwal.index', compact('jadwal'));
        } else {
            return redirect()->route('home')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }
    }
} 
