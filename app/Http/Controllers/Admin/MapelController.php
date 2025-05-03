<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
   
    public function index()
    {
        $mapel = Mapel::all();
        // dd($mapels);
        return view('admin.mapel.index', compact('mapel'));
    }

   
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show(string $id)
    {
        
    }

  
    public function edit(string $id)
    {
        
    }


    public function update(Request $request, string $id)
    {
    
    }

   
    public function destroy(string $id)
    {
        
    }
}
