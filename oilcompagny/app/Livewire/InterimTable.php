<?php

namespace App\Livewire;

use App\Models\Run;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Livewire\Component;
use Livewire\WithPagination;

class InterimTable extends Component
{

    use WithPagination;

    public string $query = '';
    public int $editId = 0;
    public string $type = '';
    public array $selection = [];

/*    public string $orderField = 'firstname';
    public string $orderDirection = 'ASC';

    public function setOrderField(string $name) {
        if($name == $this->orderField) {
            $this->orderDirection = $this->orderDirection == 'ASC' ? 'DESC' : 'ASC';
        } else {
            $this->orderField = $name;
            $this->reset('orderDirection');
        }
    }*/

    protected $listeners = [
        'userUpdated' => 'onUserUpdated'
    ];

    public function onUserUpdated() {
        session()->flash('success', 'Utilisateurs modifié !');
        $this->reset('editId');
    }

    public function sendEmail(array $ids) {
        foreach ($ids as $id) {
            $user = User::find($id);
            // Generate password random and send email
        }
    }

    public function createRun(array $ids, int $farm) { // 1 = Fer | 2 = Charbon

        foreach ($ids as $id) {
            Run::create([
                'user_id_send' => Auth::id(),
                'user_id_interim' => $id,
                'item_id' => $farm,
                'status' => "En cours",
                'paid' => false,
                'weeks' => now()->format('W'),
                'month' =>  now()->format('m'),
                'years' => now()->format('Y')
            ]);
        }
        session()->flash('success', 'Trajet créer avec succès.');

//        User::destroy($ids);
        $this->selection = [];
//        dd($ids);
    }

    public function startEdit(int $id) {
        $this->editId = $id;
    }

    public function updating($name, $value) {
        if($name == 'query') {
            $this->resetPage();
        }
    }

    public function render()
    {
        return view('livewire.interim-table',[
//            'users' => User::search("%{$this->search}%")
            'users' => User::where('ids', 'LIKE', "%{$this->query}%")
                ->orWhere('numtel', 'LIKE', "%{$this->query}%")
                ->orWhere(DB::raw("firstname || ' ' || lastname"), 'LIKE', "%".$this->query."%")
                ->orWhere(DB::raw("lastname || ' ' || firstname"), 'LIKE', "%".$this->query."%")

//                ->orderBy($this->orderField, $this->orderDirection)
                ->paginate(10)
//            'users' => User::where('lastname', $this->search)->get(),
//            'users' => User::all(),
        ]);
    }
}
