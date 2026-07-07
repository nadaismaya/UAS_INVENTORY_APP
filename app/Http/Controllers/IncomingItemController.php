<?php

namespace App\Http\Controllers;

use App\Models\IncomingItem;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncomingItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index(Request $request)
{
    $search = $request->search;

    $incomingItems = IncomingItem::with(['item', 'user'])
        ->when($search, function ($query) use ($search) {

            $query->whereHas('item', function ($q) use ($search) {

                $q->where('nama_barang', 'like', "%{$search}%");

            })
            ->orWhereHas('user', function ($q) use ($search) {

                $q->where('name', 'like', "%{$search}%");

            });

        })
        ->latest()
        ->paginate(10);

    return view('incoming_items.index', compact('incomingItems'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = Item::orderBy('nama_barang')->get();

        return view('incoming_items.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'item_id'     => 'required|exists:items,id',
            'tanggal'     => 'required|date',
            'jumlah'      => 'required|integer|min:1',
            'keterangan'  => 'nullable|string|max:255',
        ]);

        IncomingItem::create([
            'item_id'     => $request->item_id,
            'user_id'     => Auth::id(),
            'tanggal'     => $request->tanggal,
            'jumlah'      => $request->jumlah,
            'keterangan'  => $request->keterangan,
        ]);

        $item = Item::findOrFail($request->item_id);

        // Tambah stok barang
        $item->increment('stok', $request->jumlah);

        activity_log(
    'Menambahkan barang masuk: '.$item->nama_barang.
    ' sebanyak '.$request->jumlah
);

        return redirect()
            ->route('incoming-items.index')
            ->with('success', 'Barang masuk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(IncomingItem $incomingItem)
    {
        return redirect()->route('incoming-items.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IncomingItem $incomingItem)
    {
        $items = Item::orderBy('nama_barang')->get();

        return view('incoming_items.edit', compact(
            'incomingItem',
            'items'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IncomingItem $incomingItem)
    {
        $request->validate([
            'item_id'     => 'required|exists:items,id',
            'tanggal'     => 'required|date',
            'jumlah'      => 'required|integer|min:1',
            'keterangan'  => 'nullable|string|max:255',
        ]);

        // Kembalikan stok lama
        $oldItem = Item::findOrFail($incomingItem->item_id);
        $oldItem->decrement('stok', $incomingItem->jumlah);

        // Tambahkan stok baru
        $newItem = Item::findOrFail($request->item_id);
        $newItem->increment('stok', $request->jumlah);

        // Update transaksi
        $incomingItem->update([
            'item_id'     => $request->item_id,
            'tanggal'     => $request->tanggal,
            'jumlah'      => $request->jumlah,
            'keterangan'  => $request->keterangan,
        ]);


        activity_log(
    'Mengubah transaksi barang masuk: '.$newItem->nama_barang
);

        return redirect()
            ->route('incoming-items.index')
            ->with('success', 'Barang masuk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IncomingItem $incomingItem)
    {
        // Kurangi kembali stok saat transaksi dihapus
        $item = Item::findOrFail($incomingItem->item_id);

        $item->decrement('stok', $incomingItem->jumlah);

        activity_log(
    'Menghapus transaksi barang masuk: '.$item->nama_barang
);

        $incomingItem->delete();

        return redirect()
            ->route('incoming-items.index')
            ->with('success', 'Barang masuk berhasil dihapus.');
    }
}