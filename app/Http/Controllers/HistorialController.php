<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HistorialController extends Controller
{
    public function show(){
        $user = Auth::user();
        $blackjack = DB::select('SELECT * FROM `registros` WHERE usuario = ? and juego = "blackjack" ORDER BY `registros`.`created_at` DESC LIMIT 10', [$user->id]);
        $cartamasalta =  DB::select('SELECT * FROM `registros` WHERE usuario = ? and juego = "cartamasalta" ORDER BY `registros`.`created_at` DESC LIMIT 10', [$user->id]);
        $tragaperras = DB::select('SELECT * FROM `registros` WHERE usuario = ? and juego = "Tragaperras" ORDER BY `registros`.`created_at` DESC LIMIT 10', [$user->id]);
        $registros = [$blackjack, $cartamasalta, $tragaperras];
        return view('historial')->with('registros', $registros);
    }
}
