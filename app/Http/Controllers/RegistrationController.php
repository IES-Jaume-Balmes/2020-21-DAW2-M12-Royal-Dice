<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\usuario;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }
    public function store(Request $request){
        $usuario = new usuario();

        $usuario->user = $request->user;
        $usuario->password = $request->password;
        

        $usuario->save();
        return 'Usuario registrado!';
    }
}