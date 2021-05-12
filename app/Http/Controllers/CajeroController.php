<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CajeroController extends Controller
{
    public function show(){
        return view('cajero');
    }
    public function store(Request $request){
        $fichas = $request->only('ficha');
        $user = User::find($fichas);
        
        // Auth::attempt($credentials);
        if ($user) {
            // Authentication passed...
            // user::column('fichas')->increment($credentials);
            $fichas = $user;
            // $user->save();
            return redirect('main');
        }
        return redirect('login');
    }
}
