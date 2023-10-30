<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Run;
use App\Models\User;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function stats() {


//        dd($this->calculSalary(now()->format('W'), 2, 'Receive'));

//        $user = User::all();
/*        $z = [];
        foreach ($user as $u) {
//            $z[] = $u->interim->where('weeks', '44')->count();
            $z[] = $u->interim->where('weeks', '44')->count();
        }

        dd($z);*/

        return view('stats.index', [
//            'userSalary' => $this->userAllSalary(),
//            'receive' => $this->calculSalary(now()->format('W'), 2, 'Receive'),
//            'send' => $this->calculSalary(now()->format('W'), 2, 'Send'),
//            'vente' => $this->calculSalary(now()->format('W'), 2, 'Vente'),
//            'traitement' => $this->calculSalary(now()->format('W'), 2, 'Traitement'),
        ]);
    }


    public function ficheSalary() {

        return view('stats.ficheSalary', [

        ]);
    }


/*    private function userAllSalary(){
        $t = [];
        foreach (User::all() as $user) {
            $t[] = $user->firstname .' '. $this->calculSalary(now()->format('W'), $user->id, 'Send');
        }

        return $t;
    }*/


    /*
     * Params type = Traitement, Vente, Send, Receive
     */
    public function calculSalary(int $weeks, int $user, string $type) {

        switch ($type) {
            case 'Send':
                $run = Run::where('weeks', '=', $weeks)->where('user_id_send', '=', $user)->where('status', '=', 'Terminé')->get();
                $s = 0;
                foreach ($run as $r) {
                    $s = $s + $r->quantity;
                }

                return $s * Items::where('name', '=', 'Send')->first()->price;
            case 'Receive':
                $run = Run::where('weeks', '=', $weeks)->where('user_id_receive', '=', $user)->where('status', '=', 'Terminé')->get();
                $s = 0;
                foreach ($run as $r) {
                    $s = $s + $r->quantity;
                }

                return $s * Items::where('name', '=', 'Receive')->first()->price;
            case 'Traitement':
                $run = Run::where('weeks', '=', $weeks)->where('user_id_send', '=', $user)->where('status', '=', 'Traitement')->get();
                $s = 0;
                foreach ($run as $r) {
                    $s = $s + $r->quantity;
                }

                return $s * Items::where('name', '=', 'Send')->first()->price;
            case 'Vente':
                $run = Run::where('weeks', '=', $weeks)->where('user_id_send', '=', $user)->where('status', '=', 'Vente')->get();
                $s = 0;
                foreach ($run as $r) {
                    $s = $s + $r->quantity;
                }

                return $s * Items::where('name', '=', 'Vente')->first()->price;
        }


        return 'ERROR calculSalary';

    }
}
