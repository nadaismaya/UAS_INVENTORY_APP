<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Http\Request;


class ItemController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;

    $items = Item::with([
        'category',
        'suppliers',
        'unit'
    ])
    ->when($search, function ($query) use ($search) {

        $query->where('kode_barang', 'like', "%{$search}%")
              ->orWhere('nama_barang', 'like', "%{$search}%");

    })
    ->latest()
    ->paginate(10);

    return view('items.index', compact('items'));
}
    public function create()
    {
        $categories = Category::all();
        $units = Unit::all();
        $suppliers = Supplier::all();

        return view('items.create', compact(
            'categories',
            'units',
            'suppliers'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang'=>'required|unique:items',
            'nama_barang'=>'required',
            'category_id'=>'required',
            'unit_id'=>'required',
            'stok'=>'required|numeric',
            'harga'=>'required|numeric',
            'suppliers'=>'required'
        ]);

        $item = Item::create([
            'kode_barang'=>$request->kode_barang,
            'nama_barang'=>$request->nama_barang,
            'category_id'=>$request->category_id,
            'unit_id'=>$request->unit_id,
            'stok'=>$request->stok,
            'harga'=>$request->harga,
        ]);

        $item->suppliers()->sync($request->suppliers);
        activity_log('Menambahkan barang '.$item->nama_barang);
        return redirect()
            ->route('items.index')
            ->with('success','Barang berhasil ditambahkan');
    }

    public function edit(Item $item)
    {
        $categories = Category::all();
        $units = Unit::all();
        $suppliers = Supplier::all();

        return view('items.edit', compact(
            'item',
            'categories',
            'units',
            'suppliers'
        ));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'kode_barang'=>'required',
            'nama_barang'=>'required',
            'category_id'=>'required',
            'unit_id'=>'required',
            'stok'=>'required|numeric',
            'harga'=>'required|numeric',
            'suppliers'=>'required'
        ]);

        $item->update([
            'kode_barang'=>$request->kode_barang,
            'nama_barang'=>$request->nama_barang,
            'category_id'=>$request->category_id,
            'unit_id'=>$request->unit_id,
            'stok'=>$request->stok,
            'harga'=>$request->harga,
        ]);

        $item->suppliers()->sync($request->suppliers);
        activity_log('Mengubah barang '.$item->nama_barang);

        return redirect()
            ->route('items.index')
            ->with('success','Barang berhasil diupdate');
    }

    public function destroy(Item $item)
    {
        activity_log('Menghapus barang '.$item->nama_barang);
        $item->delete();

        return redirect()
            ->route('items.index')
            ->with('success','Barang berhasil dihapus');
    }
}