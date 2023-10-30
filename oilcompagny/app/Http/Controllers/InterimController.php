<?php

namespace App\Http\Controllers;

use App\Models\horaire;
use App\Models\matricule;
use App\Models\Run;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class InterimController extends Controller
{

    public function interimList() {
        return view('interim.list', [
            'users' => User::all()
        ]);
    }

    public function interimCreate() {
        return view('interim.create', [

        ]);
    }

    public function interimRun() {
        return view('interim.run', [
            'runs' => Run::where('status', "=", "En cours")->get()
        ]);
    }

    public function interimCreatePost(Request $request) {

        $request->validate([
            'floating_ids' => ['required'],
            'floating_first_name' => ['required', 'string', 'max:255'],
            'floating_last_name' => ['required', 'string', 'max:255'],
            'floating_tel' => ['required'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => $this->passwordRules(),
//            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ]);

        User::create([
            'ids' => $request->input('floating_ids'),
            'firstname' => $request->input('floating_first_name'),
            'lastname' => $request->input('floating_last_name'),
            'numtel' => $request->input('floating_tel'),
            'email' => null,
            'password' => Hash::make($this->getRandomString(20)),
        ]);

        return redirect()->route('dashboard')->banner('Intérimaire ajouté !');


    }

    function getRandomString($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#[{}|]';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

}
