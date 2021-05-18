<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CajeroController extends Controller
{
    public function show(){
         return view('cajero', [
             'fichas' => Auth::user()->fichas
         ]);
    }
    public function store(Request $request){
        $params = $request->only('ficha');
        $user = Auth::user();

        $dbUser = User::find($user->id);

        $dbUser->fichas += $params['ficha'];
        $dbUser->save();
       
        return view('cajero', [
            'fichas' => $dbUser->fichas
        ]);
    }
}
