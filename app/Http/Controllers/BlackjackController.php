<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Registro;

class BlackjackController extends Controller
{
    public function show(){
        return view('blackjack');
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
        $params = $request->only('apuesta');
        $apuesta = $params['apuesta'];
        $user = Auth::user();
        $dbUser = User::find($user->id);
        $registro = Auth::Registro();

        // $dbpartida = Registro::insert($registro->id);

        $dbUser->fichas += $apuesta*2;
        $dbUser->save();

        return response()->json([
            'anadido' => true

        ]);
    }  
}
