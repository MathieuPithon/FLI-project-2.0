<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            ['category_id' =>'1',
            'image_path' => 'images/rallonge_electrique.jpg'],
        ]);
        DB::table('feature_item')->insert([
                ['feature_id' => '1', 'item_id' => '1', 'value' => '2 mètres']
        ]);
    }
}
