<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;

    $suppliers = Supplier::when($search, function ($query) use ($search) {

        $query->where('nama', 'like', "%{$search}%")
              ->orWhere('alamat', 'like', "%{$search}%")
              ->orWhere('telepon', 'like', "%{$search}%")
              ->orWhere('email', 'like', "%{$search}%");

    })
    ->latest()
    ->paginate(10);

    return view('suppliers.index', compact('suppliers'));
}

    public function create()
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'alamat' => 'required',
            'telepon' => 'required|max:20',
            'email' => 'nullable|email',
        ]);

        Supplier::create($request->all());
        activity_log('Menambahkan supplier '.$request->nama);

        return redirect()->route('suppliers.index')
            ->with('success', 'Supplier berhasil ditambahkan.');
    }

    public function show(Supplier $supplier)
    {
        //
    }

    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'alamat' => 'required',
            'telepon' => 'required|max:20',
            'email' => 'nullable|email',
        ]);

        $supplier->update($request->all());
        activity_log('Mengubah supplier '.$supplier->nama);

        return redirect()->route('suppliers.index')
            ->with('success', 'Supplier berhasil diperbarui.');
    }

    public function destroy(Supplier $supplier)
    {
        activity_log('Menghapus supplier '.$supplier->nama);

        $supplier->delete();

        return redirect()->route('suppliers.index')
            ->with('success', 'Supplier berhasil dihapus.');
    }
}