<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\BlackjackController;
use App\Http\Controllers\CartaMasAltaController;
use App\Http\Controllers\CajeroController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TragaperrasController;
use Illuminate\Routing\Route as RoutingRoute;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

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
Route::post('perfil', [PerfilController::class, 'store'])->name('perfil.store');

Route::get('blackjack', [BlackjackController::class, 'show'])->name('blackjack');
Route::post('blackjack', [BlackjackController::class, 'store'])->name('blackjack.store');

Route::get('cartamasalta', [CartaMasAltaController::class, 'show'])->name('cartamasalta');

Route::get('tragaperras', [TragaperrasController::class, 'show'])->name('tragaperras');

Route::get('cajero', [CajeroController::class, 'show'])->name('cajero');
Route::post('cajero', [CajeroController::class, 'store'])->name('cajero.store');

Route::get('template', [TemplateController::class, 'show']);
