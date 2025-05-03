<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dashboard;
use App\Http\Requests\StoreDashboardRequest;
use App\Http\Requests\UpdateDashboardRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pengumuman;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $d = User::where('roles_id', 3)->count(); // Data
        $gurus = User::where('roles_id', 2)->latest('id')->count();
        // dd($d, $gurus);
        $pengumumans = Pengumuman::latest()->first();
        return view('admin.dashboard', compact('d', 'gurus', 'pengumumans')); // dikirim ke view
    }

}
