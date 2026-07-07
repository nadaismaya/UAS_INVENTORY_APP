<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IncomingItem;

class IncomingItemSeeder extends Seeder
{
    public function run(): void
    {
        IncomingItem::insert([
            [
                'item_id' => 1,
                'user_id' => 1,
                'tanggal' => now(),
                'jumlah' => 5,
                'keterangan' => 'Pembelian baru',
            ],
            [
                'item_id' => 2,
                'user_id' => 1,
                'tanggal' => now(),
                'jumlah' => 2,
                'keterangan' => 'Restock gudang',
            ],
        ]);
    }
}