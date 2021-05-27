<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PerfilController extends Controller
{
    public function show(){
        return view('perfil');
    }
    public function store(Request $request){
        $user = Auth::user();
        $params = $request->only('newpassword');

        $dbUser = User::find($user->id);

        //$request->newpassword =  ;
        
        $dbUser->password = Hash::make($params['newpassword']);
        
        $dbUser->save();
        
        return view('perfil', [
            'password' => $dbUser->password
        ]);
    }
}
