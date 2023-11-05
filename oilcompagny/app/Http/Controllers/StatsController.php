<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Run;
use App\Models\User;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function stats(?int $weeks = null) {

        if($weeks == null) {
            $weeks = now()->format('W');
        }

//        dd($this->calculSalary(now()->format('W'), 2, 'Receive'));

        $user = User::all();
        $t = [];
        foreach ($user as $u) {
            foreach ($u->getRoleNames() as $z) {
                if($z == "*") {
                    $send = $this->calculSalary($weeks, $u->id, 'Send');
                    $receive = $this->calculSalary($weeks, $u->id, 'Receive');
                    $traitement = $this->calculSalary($weeks, $u->id, 'Traitement');
                    $vente = $this->calculSalary($weeks, $u->id, 'Vente');
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

    public function stock() {

        $st = Run::all()->where('status', '=' ,'Traitement');
        $sv = Run::all()->where('status', '=' ,'Vente');

        $acier = 0;
        foreach ($st as $t) {
            $acier = $acier + $t->quantity;
        }

        $vente = 0;
        foreach ($st as $t) {
            $vente = $vente + $t->quantity;
        }


        return view('stats.stock', [
            'acier' => ($acier - $vente),
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
