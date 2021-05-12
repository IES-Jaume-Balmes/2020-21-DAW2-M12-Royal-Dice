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
        
        $credentials = $request->only('ficha');
        
        // Auth::attempt($credentials);
        if (Auth::user()) {
            // Authentication passed...
            $credentials = Auth::user('fichas');
            return redirect('main');
        }
        return redirect('login');
    }
}
