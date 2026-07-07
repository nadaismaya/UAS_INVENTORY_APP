<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OutgoingItem;

class OutgoingItemSeeder extends Seeder
{
    public function run(): void
    {
        OutgoingItem::insert([
            [
                'item_id' => 1,
                'user_id' => 1,
                'tanggal' => now(),
                'jumlah' => 1,
                'tujuan' => 'Divisi Keuangan',
            ],
            [
                'item_id' => 3,
                'user_id' => 2,
                'tanggal' => now(),
                'jumlah' => 2,
                'tujuan' => 'Divisi IT',
            ],
        ]);
    }
}