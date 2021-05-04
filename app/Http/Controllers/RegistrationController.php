<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }
    public function store()
    {
        $this->validate(request(), [
            'usuario' => 'required',
            'contrasena' => 'required'
        ]);
        
        $user = User::create(request(['usuario', 'contrasena']));
        
        auth()->login($user);
        
        return redirect()->to('/');
    }
}