<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;

    $units = Unit::when($search, function ($query) use ($search) {

        $query->where('nama', 'like', "%{$search}%");

    })
    ->latest()
    ->paginate(10);

    return view('units.index', compact('units'));
}
    public function create()
    {
        return view('units.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100'
        ]);

        Unit::create($request->only('nama'));
        activity_log('Menambahkan satuan '.$request->nama);
        return redirect()->route('units.index')
            ->with('success','Satuan berhasil ditambahkan.');
    }

    public function show(Unit $unit)
    {
        //
    }

    public function edit(Unit $unit)
    {
        return view('units.edit', compact('unit'));
    }

    public function update(Request $request, Unit $unit)
    {
        $request->validate([
            'nama' => 'required|max:100'
        ]);

        $unit->update($request->only('nama'));
        activity_log('Mengubah satuan '.$unit->nama);
        return redirect()->route('units.index')
            ->with('success','Satuan berhasil diperbarui.');
    }

    public function destroy(Unit $unit)
    {
        activity_log('Menghapus satuan '.$unit->nama);

        $unit->delete();

        return redirect()->route('units.index')
            ->with('success','Satuan berhasil dihapus.');
    }
}
