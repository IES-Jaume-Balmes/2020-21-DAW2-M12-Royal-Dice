<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function show(){
        return view('perfil');
    }
    public function store(Request $request){
        $params = $request->only('newpassword');
        $user = Auth::user();

        $dbUser = User::find($user->id);

        $params['newpassword'] = $dbUser->password ;
        $dbUser->save();
       
        return view('perfil', [
            'password' => $dbUser->password
        ]);
    }
}
