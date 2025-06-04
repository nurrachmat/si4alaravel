<?php

namespace App\Http\Controllers;

use App\Models\Sesi;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sesis = Sesi::all();
        return view('sesi.index', compact('sesis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sesi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Sesi::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('sesi.index')->with('success', 'Sesi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sesi $sesi)
    {
        return view('sesi.show', compact('sesi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sesi $sesi)
    {
        return view('sesi.edit', compact('sesi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sesi $sesi)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $sesi->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('sesi.index')->with('success', 'Sesi berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sesi $sesi)
    {
        $sesi->delete();
        return redirect()->route('sesi.index')->with('success', 'Sesi berhasil dihapus.');
    }
}
