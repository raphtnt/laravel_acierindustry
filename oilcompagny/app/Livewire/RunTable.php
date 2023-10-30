<?php

namespace App\Livewire;

use App\Models\Items;
use App\Models\Run;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RunTable extends Component
{

    public Run $run;
    public int $editId = 0;

    protected $listeners = [
        'userUpdated' => 'onUserUpdated'
    ];

    public int $quantitytruck = 0;
    public int $quantitybag = 0;
    public bool $paid = true;
    public bool $restart = false;
    public bool $repair = false;
    public array $selection = [];


    public int $price = 0;

    public function save() {
        $run = Run::find($this->editId);

        if($this->restart) {
            Run::create([
                'user_id_send' => Auth::id(),
                'user_id_interim' => $run->user_id_interim,
                'item_id' => $run->item_id,
                'status' => "En cours",
                'paid' => false,
                'weeks' => now()->format('W'),
                'month' =>  now()->format('m'),
                'years' => now()->format('Y')
            ]);
        }

        $calcul = $this->quantitytruck + $this->quantitybag;
        $unitprice = Items::where('id', '=', $run->item_id)->first()->price;

        $run->quantity = $calcul;
        $run->paid = $this->paid;
        $run->status = "Terminé";
        $run->repair = $this->repair;
        $run->unitprice = $unitprice;
        $run->user_id_receive = Auth::id();
        $run->save();

        $paie = ($calcul * $unitprice);
        if($this->repair) {
            $paie = ($calcul * $unitprice) - 75000;
        }

        session()->flash('danger', 'Vous devez payé ' . number_format($paie, 0, " ", " ") . '€');
    }

    public function cancel() {
        foreach ($this->selection as $select) {
            $run = Run::find($select);
            $run->status = "Annulé";
            $run->quantity = 0;
            $run->unitprice = 0;
            $run->user_id_receive = Auth::id();
            $run->save();
        }
        $this->selection = [];

    }

    public function onUserUpdated() {
        $this->reset('editId');
    }

    public function startEdit(int $id) {
        $this->editId = $id;
    }

    public function render()
    {
        return view('livewire.run-table', [
            'runs' => Run::where('status', 'LIKE', 'En cours')->get(),
            'lastruns' => Run::where('status', 'LIKE', 'Terminé')->limit(50)->paginate(10)
        ]);
    }
}
