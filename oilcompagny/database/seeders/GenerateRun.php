<?php

namespace Database\Seeders;

use App\Models\Items;
use App\Models\Run;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class GenerateRun extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Run::factory(100)->state(new Sequence(
            fn (Sequence $sequence) => ['user_id_send' => User::all()->random()],
        ))->state(new Sequence(
            fn (Sequence $sequence) => ['user_id_receive' => User::all()->random()],
        ))->state(new Sequence(
            fn (Sequence $sequence) => ['user_id_interim' => User::all()->random()],
        ))->state(new Sequence(
            fn (Sequence $sequence) => ['item_id' => Items::all()->random()],
        ))->state(new Sequence(
            ['status' => 'En cours'],
            ['status' => 'Terminé'],
            ['status' => 'Annulé'],
            ['status' => 'Traitement'],
            ['status' => 'Vente'],
        ))->create();
    }
}
