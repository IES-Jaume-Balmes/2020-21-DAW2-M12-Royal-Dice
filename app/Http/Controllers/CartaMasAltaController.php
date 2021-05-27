<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Registro;
use Illuminate\Support\Facades\Auth;

class CartaMasAltaController extends Controller
{
    public function show(){
        return view('cartamasalta');
    }
    public function apuesta(Request $request){
        $params = $request->only('apuesta');
        $apuesta = $params['apuesta'];
        $user = Auth::user();

        $dbUser = User::find($user->id);
        if($dbUser->fichas < $apuesta){
            return response()->json([
                'sepuede' => false
            ]);
            // return view('cajero');
        }
        $dbUser->fichas -= $apuesta;
        $dbUser->save();

        return response()->json([
            'sepuede' => true
        ]);
    }
    public function recompensa(Request $request){
        $params = $request->only('apuesta');
        $apuesta = $params['apuesta'];
        $user = Auth::user();

        $dbUser = User::find($user->id);
        
        $dbUser->fichas += $apuesta*2;
        $dbUser->save();

        return response()->json([
            'anadido' => true

        ]);
    }
    public function refresh_user_data(Request $request){
        $user = Auth::user();
        $dbUser = User::find($user->id);
        return response()->json([
            'fichas' => $dbUser->fichas
        ]);
    }
    public function registro_partida(Request $request){
        $registro = new Registro();
        $registro->juego = 'cartamasalta';

        $params = $request;
        $apuesta = $params['apuesta'];
        $registro->apuesta = $apuesta;
        $registro->usuario = Auth::user()->id;
        
        $registro->beneficioperdida = $params['beneficioperdida'];
        $registro->save();
        return response()->json([
            'registrado' => true
        ]);
    }
}
