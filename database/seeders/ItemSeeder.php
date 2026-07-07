<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        Item::insert([
            [
                'kode_barang' => 'BRG001',
                'nama_barang' => 'Laptop ASUS VivoBook',
                'category_id' => 1,
                'unit_id' => 1,
                'stok' => 10,
                'harga' => 8500000,
            ],
            [
                'kode_barang' => 'BRG002',
                'nama_barang' => 'Printer Epson L3210',
                'category_id' => 2,
                'unit_id' => 1,
                'stok' => 6,
                'harga' => 2800000,
            ],
            [
                'kode_barang' => 'BRG003',
                'nama_barang' => 'Mouse Logitech M220',
                'category_id' => 3,
                'unit_id' => 2,
                'stok' => 30,
                'harga' => 175000,
            ],
            [
                'kode_barang' => 'BRG004',
                'nama_barang' => 'Router TP-Link',
                'category_id' => 4,
                'unit_id' => 1,
                'stok' => 8,
                'harga' => 750000,
            ],
            [
                'kode_barang' => 'BRG005',
                'nama_barang' => 'Kursi Kantor',
                'category_id' => 5,
                'unit_id' => 1,
                'stok' => 15,
                'harga' => 1200000,
            ],
        ]);
    }
}