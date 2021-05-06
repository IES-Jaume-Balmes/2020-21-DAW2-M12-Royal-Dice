<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\usuario;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Http\Requests\StoreUsuari;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }
    public function store(StoreUsuari $request){

        $usuario = new usuario();

        $usuario->user = $request->user;
        $usuario->password = $request->password;
        

        $usuario->save();
        return view('registro');
    }
    public function show($id){
        $usuario = usuario::find($id);

        return view('registro');
    }
}