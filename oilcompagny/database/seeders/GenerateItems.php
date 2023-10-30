<?php

namespace Database\Seeders;

use App\Models\Items;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerateItems extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Items::create([
           'name' => 'Fer',
           'price' => 1760,
           'type' => 'Intérimaire'
        ]);

        Items::create([
           'name' => 'Charbon',
           'price' => 1760,
           'type' => 'Intérimaire',
        ]);

        Items::create([
            'name' => 'Traitement',
            'price' => 5,
            'type' => 'Traitement',
        ]);

        Items::create([
            'name' => 'Vente',
            'price' => 5,
            'type' => 'Vente',
        ]);

        Items::create([
            'name' => 'Acier',
            'price' => 0,
            'type' => 'Items',
        ]);

        Items::create([
            'name' => 'Send',
            'price' => 0,
            'type' => 'Send',
        ]);

        Items::create([
            'name' => 'Receive',
            'price' => 0,
            'type' => 'Receive',
        ]);
    }
}
