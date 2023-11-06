<?php

namespace App\Livewire;

use App\Models\Items;
use App\Models\Run;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VenteForm extends Component
{

    public int $quantity = 0;
    public int $bourse = 0;
    public $type = "Traitement";

    public function save() {

        $price = 0;
        switch ($this->type) {
            case "Vente":
                $price = $this->bourse;
                break;
            case "Traitement":
                $price = Items::where('type', '=', 'Traitement')->first()->price;
                break;
            default:
                $price = 0;
                break;
        }

        Run::create([
            'user_id_send' => Auth::id(),
            'item_id' => Items::where('name', '=', 'Acier')->first()->id,
            'quantity' => $this->quantity,
            'status' => $this->type,
            'unitprice' => $price,
            'weeks' => now()->format('W'),
            'month' =>  now()->format('m'),
            'years' => now()->format('Y')
        ]);

        session()->flash('success', 'Ajout effectué !');

    }

    public function render()
    {
        return view('livewire.vente-form');
    }
}
