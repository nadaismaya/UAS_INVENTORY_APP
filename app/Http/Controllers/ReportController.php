<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function exportCsv()
    {
        $filename = 'laporan_barang.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="'.$filename.'"',
        ];

        $callback = function () {

            $file = fopen('php://output', 'w');

            fputcsv($file, [
                'Kode Barang',
                'Nama Barang',
                'Kategori',
                'Supplier',
                'Satuan',
                'Stok'
            ]);

            $items = Item::with([
                'category',
                'suppliers',
                'unit'
            ])->get();

            foreach ($items as $item) {

                fputcsv($file, [

                    $item->kode_barang,
                    $item->nama_barang,
                    $item->category->nama ?? '-',
                    $item->suppliers->pluck('nama')->implode(', '),
                    $item->unit->nama ?? '-',
                    $item->stok,

                ]);

            }

            fclose($file);

        };

        return response()->streamDownload($callback, $filename, $headers);
    }

    public function print()
    {
        $items = Item::with([
            'category',
            'suppliers',
            'unit'
        ])->get();

        return view('reports.print', compact('items'));
    }

    public function incoming()
    {
        $incomingItems = \App\Models\IncomingItem::with([
            'item',
            'user'
        ])->latest()->get();

        return view('reports.incoming', compact('incomingItems'));
    }

    public function printIncoming()
    {
        $incomingItems = \App\Models\IncomingItem::with([
            'item',
            'user'
        ])->latest()->get();

        return view('reports.print_incoming', compact('incomingItems'));
    }

    public function outgoing()
    {
        $outgoingItems = \App\Models\OutgoingItem::with([
            'item',
            'user'
        ])->latest()->get();

        return view('reports.outgoing', compact('outgoingItems'));
    }

    public function printOutgoing()
    {
        $outgoingItems = \App\Models\OutgoingItem::with([
            'item',
            'user'
        ])->latest()->get();

        return view('reports.print_outgoing', compact('outgoingItems'));
    }

    public function filterIncoming(Request $request)
    {
        $incomingItems = \App\Models\IncomingItem::with([
            'item',
            'user'
        ])
        ->whereBetween('tanggal', [
            $request->tanggal_awal,
            $request->tanggal_akhir
        ])
        ->latest()
        ->get();

        return view('reports.incoming', compact('incomingItems'));
    }

    public function filterOutgoing(Request $request)
    {
        $outgoingItems = \App\Models\OutgoingItem::with([
            'item',
            'user'
        ])
        ->whereBetween('tanggal', [
            $request->tanggal_awal,
            $request->tanggal_akhir
        ])
        ->latest()
        ->get();

        return view('reports.outgoing', compact('outgoingItems'));
    }



   public function exportIncomingCsv()
{
    $filename = 'laporan_barang_masuk.csv';

    $headers = [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="'.$filename.'"',
    ];

    $callback = function () {

        $file = fopen('php://output', 'w');

        fputcsv($file, [
            'Tanggal',
            'Barang',
            'Jumlah',
            'Petugas',
            'Keterangan'
        ]);

        $incomingItems = \App\Models\IncomingItem::with([
            'item',
            'user'
        ])->latest()->get();

        foreach ($incomingItems as $item) {

            fputcsv($file, [

                $item->tanggal,
                $item->item->nama_barang,
                $item->jumlah,
                $item->user->name,
                $item->keterangan,

            ]);

        }

        fclose($file);

    };

    return response()->streamDownload($callback, $filename, $headers);
}



public function exportOutgoingCsv()
{
    $filename = 'laporan_barang_keluar.csv';

    $headers = [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="'.$filename.'"',
    ];

    $callback = function () {

        $file = fopen('php://output', 'w');

        fputcsv($file, [
            'Tanggal',
            'Barang',
            'Jumlah',
            'Petugas',
            'Tujuan'
        ]);

        $outgoingItems = \App\Models\OutgoingItem::with([
            'item',
            'user'
        ])->latest()->get();

        foreach ($outgoingItems as $item) {

            fputcsv($file, [

                $item->tanggal,
                $item->item->nama_barang,
                $item->jumlah,
                $item->user->name,
                $item->tujuan,

            ]);

        }

        fclose($file);

    };

    return response()->streamDownload($callback, $filename, $headers);
}
}