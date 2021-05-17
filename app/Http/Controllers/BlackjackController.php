<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BlackjackController extends Controller
{
    public function show(){
        return view('blackjack');
    }
    public function store(Request $request){
        $params = $request->only('apuesta');
        $user = Auth::user();

        $dbUser = User::find($user->id);

        $dbUser->fichas -= $params['apuesta'];
        $dbUser->save();
       
        return view('blackjack', [
            'fichas' => $dbUser->fichas
        ]);
    }
}
