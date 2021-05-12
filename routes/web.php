<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PerfilController;
use Illuminate\Routing\Route as RoutingRoute;

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

Route::get('/', function () {
    return view('login');
});

Route::get('register', [RegistrationController::class, 'create']);
Route::post('register', [RegistrationController::class, 'store'])->name('register.store');

Route::get('main', [MainController::class, 'create'])->name('main');

Route::get('login', [SessionsController::class, 'create']);
Route::get('logout', [SessionsController::class, 'logout'])->name('logout');
Route::post('login', [SessionsController::class, 'authenticate'])->name('login.main');

Route::get('perfil', [PerfilController::class, 'show'])->name('perfil');