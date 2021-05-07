<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create(){
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('name', 'password');
        /*$request->authenticate();*/
        
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return view('main');
        }
        return 'Inicio de sesión incorrecto. Vuelva a la pagina anterior';
    }
}
?>