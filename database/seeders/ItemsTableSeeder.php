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
        DB::table('items')->insert([
            ['category_id' =>'2',
            'image_path' => 'images/bloc-multiprise-4x16a-avec-interrupteur-1m.jpg'],
        ]);
        DB::table('feature_item')->insert([
                ['feature_id' => '2', 'item_id' => '2', 'value' => '4']
        ]);
        DB::table('items')->insert([
            ['category_id' =>'3',
            'image_path' => 'images/ecran_pc.jpg'],
        ]);
        DB::table('feature_item')->insert([
                ['feature_id' => '3', 'item_id' => '3', 'value' => '1920x1080']
        ]);
    }
}
