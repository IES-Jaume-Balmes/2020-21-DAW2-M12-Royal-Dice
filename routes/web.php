<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', HomeController::class);*/

/*Route::get('register', RegisterController::class);*/

Route::get('/', [RegistrationController::class, 'create']);
Route::post('/', function(){
    $credentials = request()->only('usuario', 'contrasena');

    if(Auth::attempt($credentials)){
        return 'Sesión iniciada !!!!';
    };
    return 'Algo salió mal:/';
});

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');