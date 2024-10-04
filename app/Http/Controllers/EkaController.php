<?php

namespace App\Http\Controllers;

use App\Models\eka;
use App\Http\Requests\StoreekaRequest;
use App\Http\Requests\UpdateekaRequest;


class EkaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $c = eka::all(); // Data
        return view('eka', compact('c')); // dikirim ke view
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
    public function store(StoreekaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(eka $eka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(eka $eka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateekaRequest $request, eka $eka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(eka $eka)
    {
        //
    }
}
