<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $categories = Category::when($search, function ($query) use ($search) {

            $query->where('nama', 'like', "%{$search}%");

        })
        ->latest()
        ->paginate(10);

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'deskripsi' => 'nullable|max:255',
        ]);

        $category = Category::create(
            $request->only('nama', 'deskripsi')
        );

        activity_log('Menambahkan kategori ' . $category->nama);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'deskripsi' => 'nullable|max:255',
        ]);

        $category->update(
            $request->only('nama', 'deskripsi')
        );

        activity_log('Mengubah kategori ' . $category->nama);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(Category $category)
    {
        activity_log('Menghapus kategori ' . $category->nama);

        $category->delete();

        return redirect()
            ->route('categories.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}