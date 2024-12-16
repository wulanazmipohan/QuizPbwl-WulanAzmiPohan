<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Golongan;

class GolonganController extends Controller
{
    public function index()
    {
        $golongans = Golongan::all();
        return view('golongan.index', compact('golongans'));
    }

    public function create()
    {
        return view('golongan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gol_kode' => 'required|string|max:10',
            'gol_nama' => 'required|string|max:50',
        ]);

        Golongan::create($request->all());
        return redirect()->route('golongan.index')->with('success', 'Golongan created successfully.');
    }

    public function edit($id)
    {
        $golongan = Golongan::findOrFail($id);
        return view('golongan.edit', compact('golongan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gol_kode' => 'required|string|max:10',
            'gol_nama' => 'required|string|max:50',
        ]);

        $golongan = Golongan::findOrFail($id);
        $golongan->update($request->all());
        return redirect()->route('golongan.index')->with('success', 'Golongan updated successfully.');
    }
}