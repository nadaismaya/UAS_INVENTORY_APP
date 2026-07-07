<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('item_supplier')->insert([

            [
                'item_id' => 1,
                'supplier_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'item_id' => 2,
                'supplier_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'item_id' => 3,
                'supplier_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'item_id' => 4,
                'supplier_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'item_id' => 5,
                'supplier_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}