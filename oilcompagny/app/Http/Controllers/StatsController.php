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

        $user = User::all();
        $t = [];
        foreach ($user as $u) {
            foreach ($u->getRoleNames() as $z) {
                if($z == "*") {
                    $send = $this->calculSalary(now()->format('W'), $u->id, 'Send');
                    $receive = $this->calculSalary(now()->format('W'), $u->id, 'Receive');
                    $traitement = $this->calculSalary(now()->format('W'), $u->id, 'Traitement');
                    $vente = $this->calculSalary(now()->format('W'), $u->id, 'Vente');
                    $c = $send + $receive + $traitement + $vente;
                    $t = array_merge($t, [$u->firstname.' '.$u->lastname => number_format($c, 0, " ", " ")]);
                }
            }
        }
        arsort($t);
/*        $z = [];
        foreach ($user as $u) {
//            $z[] = $u->interim->where('weeks', '44')->count();
            $z[] = $u->interim->where('weeks', '44')->count();
        }

        dd($z);*/

        return view('stats.index', [
            'salaire' => $t
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
