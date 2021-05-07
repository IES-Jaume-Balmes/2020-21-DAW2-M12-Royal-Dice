<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }
    public function store(Request $request){

        $usuario = new User();

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        

        $usuario->save();
        return view('login');
    }
    public function show($id){
        $usuario = User::find($id);

        return view('login');
    }
}