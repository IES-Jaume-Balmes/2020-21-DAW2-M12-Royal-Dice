<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Route;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route as FacadesRoute;

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
            return redirect('main');
        }
        return redirect('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
?>