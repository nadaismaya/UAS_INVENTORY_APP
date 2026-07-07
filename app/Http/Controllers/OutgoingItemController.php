<?php

namespace App\Http\Controllers;

use App\Models\OutgoingItem;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OutgoingItemController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;

    $outgoingItems = OutgoingItem::with(['item', 'user'])
        ->when($search, function ($query) use ($search) {

            $query->whereHas('item', function ($q) use ($search) {

                $q->where('nama_barang', 'like', "%{$search}%");

            })
            ->orWhereHas('user', function ($q) use ($search) {

                $q->where('name', 'like', "%{$search}%");

            })
            ->orWhere('tujuan', 'like', "%{$search}%");

        })
        ->latest()
        ->paginate(10);

    return view('outgoing_items.index', compact('outgoingItems'));
}

    public function create()
    {
        $items = Item::orderBy('nama_barang')->get();

        return view('outgoing_items.create', compact('items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_id' => 'required|exists:items,id',
            'tanggal' => 'required|date',
            'jumlah' => 'required|integer|min:1',
            'tujuan' => 'required|max:255',
        ]);

        $item = Item::findOrFail($request->item_id);

        if ($item->stok < $request->jumlah) {

            return back()
                ->withInput()
                ->with('error', 'Stok barang tidak mencukupi.');

        }

        OutgoingItem::create([
            'item_id' => $request->item_id,
            'user_id' => Auth::id(),
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'tujuan' => $request->tujuan,
        ]);

        $item->decrement('stok', $request->jumlah);

        activity_log(
    'Menambahkan barang keluar: '.$item->nama_barang.
    ' sebanyak '.$request->jumlah
);

        return redirect()
            ->route('outgoing-items.index')
            ->with('success', 'Barang keluar berhasil ditambahkan.');
    }

    public function show(OutgoingItem $outgoingItem)
    {
        return redirect()->route('outgoing-items.index');
    }

    public function edit(OutgoingItem $outgoingItem)
    {
        $items = Item::orderBy('nama_barang')->get();

        return view('outgoing_items.edit', compact(
            'outgoingItem',
            'items'
        ));
    }

    public function update(Request $request, OutgoingItem $outgoingItem)
    {
        $request->validate([
            'item_id' => 'required|exists:items,id',
            'tanggal' => 'required|date',
            'jumlah' => 'required|integer|min:1',
            'tujuan' => 'required|max:255',
        ]);

        // Kembalikan stok lama
        $oldItem = Item::findOrFail($outgoingItem->item_id);
        $oldItem->increment('stok', $outgoingItem->jumlah);

        // Ambil barang baru
        $newItem = Item::findOrFail($request->item_id);

        if ($newItem->stok < $request->jumlah) {

            // Kembalikan perubahan stok lama
            $oldItem->decrement('stok', $outgoingItem->jumlah);

            return back()
                ->withInput()
                ->with('error', 'Stok barang tidak mencukupi.');

        }

        $newItem->decrement('stok', $request->jumlah);

        $outgoingItem->update([
            'item_id' => $request->item_id,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'tujuan' => $request->tujuan,
        ]);

        activity_log(
    'Mengubah transaksi barang keluar: '.$newItem->nama_barang
);

        return redirect()
            ->route('outgoing-items.index')
            ->with('success', 'Barang keluar berhasil diperbarui.');
    }

    public function destroy(OutgoingItem $outgoingItem)
    {
        $item = Item::findOrFail($outgoingItem->item_id);

        // Kembalikan stok
        $item->increment('stok', $outgoingItem->jumlah);

        activity_log(
    'Menghapus transaksi barang keluar: '.$item->nama_barang
);

        $outgoingItem->delete();

        return redirect()
            ->route('outgoing-items.index')
            ->with('success', 'Barang keluar berhasil dihapus.');
    }
}