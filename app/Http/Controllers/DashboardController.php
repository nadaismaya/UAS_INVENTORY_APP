<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\IncomingItem;
use App\Models\Item;
use App\Models\OutgoingItem;
use App\Models\Supplier;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Total Data
        $totalBarang = Item::count();
        $totalKategori = Category::count();
        $totalSupplier = Supplier::count();
        $totalUser = User::count();

        // Statistik
        $totalBarangMasuk = IncomingItem::sum('jumlah');
        $totalBarangKeluar = OutgoingItem::sum('jumlah');
        $totalStok = Item::sum('stok');
        $stokMenipis = Item::where('stok', '<=', 5)->count();

        // Grafik Barang Masuk
        $monthlyIncoming = [];

        for ($i = 1; $i <= 12; $i++) {
            $monthlyIncoming[] = IncomingItem::whereMonth('tanggal', $i)
                ->sum('jumlah');
        }

        // Grafik Barang Keluar
        $monthlyOutgoing = [];

        for ($i = 1; $i <= 12; $i++) {
            $monthlyOutgoing[] = OutgoingItem::whereMonth('tanggal', $i)
                ->sum('jumlah');
        }

        return view('dashboard.index', compact(
            'totalBarang',
            'totalKategori',
            'totalSupplier',
            'totalUser',
            'totalBarangMasuk',
            'totalBarangKeluar',
            'totalStok',
            'stokMenipis',
            'monthlyIncoming',
            'monthlyOutgoing'
        ));
    }
}