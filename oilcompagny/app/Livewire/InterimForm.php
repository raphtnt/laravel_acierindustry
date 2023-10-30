<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class InterimForm extends Component
{

    public User $user;

    protected $rules = [
        'user.ids' => 'required|int',
        'user.firstname' => 'required|string',
        'user.lastname' => 'required|string',
        'user.email' => '',
        'user.numtel' => 'required|string',
    ];

    public function save() {
        $this->validate();
        $this->user->save();
        $this->dispatch('userUpdated');
//        sleep(3);
//        $this->validate();
    }

    public function render()
    {
        return view('livewire.interim-form');
    }
}
