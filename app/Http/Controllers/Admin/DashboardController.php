<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dashboard;
use App\Http\Requests\StoreDashboardRequest;
use App\Http\Requests\UpdateDashboardRequest;
use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $d = User::all(); // Data
        return view('admin.dashboard', compact('d')); // dikirim ke view
    }
}