<?php

namespace App\Http\Controllers;

use App\Models\Haziq;
use App\Http\Requests\StoreHaziqRequest;
use App\Http\Requests\UpdateHaziqRequest;

class HaziqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $b = Haziq::all(); // Data
        return view('haziq', compact('b')); // dikirim ke view
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
    public function store(StoreHaziqRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Haziq $haziq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Haziq $haziq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHaziqRequest $request, Haziq $haziq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Haziq $haziq)
    {
        //
    }
}
