<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Registro;
use Illuminate\Support\Facades\Auth;

class TragaperrasController extends Controller
{
    public function show(){
        return view('tragaperras');
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
        }
        $dbUser->fichas -= $apuesta;
        $dbUser->save();

        return response()->json([
            'sepuede' => true
        ]);
    }
    public function recompensa(Request $request){
        if($request == true){
        $params = $request->only('ganancias');
        $apuesta = $params['ganancias'];
        
        $user = Auth::user();

        $dbUser = User::find($user->id);
        
        $dbUser->fichas += $apuesta;
        $dbUser->save();

        return response()->json([
            'anadido' => true
        ]);
        }
        return response()->json([
            'anadido' => false
        ]);
    }
    public function registro_partida(Request $request){
        $registro = new Registro();
        $registro->juego = 'Tragaperras';

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
