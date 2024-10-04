<?php

namespace App\Http\Controllers;

use App\Models\kocak;
use App\Http\Requests\StorekocakRequest;
use App\Http\Requests\UpdatekocakRequest;

class KocakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $d = Kocak::all(); // Data
        return view('kocak', compact('d')); // dikirim ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorekocakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(kocak $kocak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kocak $kocak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekocakRequest $request, kocak $kocak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kocak $kocak)
    {
        //
    }
}
