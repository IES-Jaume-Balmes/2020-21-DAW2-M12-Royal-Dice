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
Route::post('blackjack/apuesta', [BlackjackController::class, 'apuesta'])->name('blackjack.apuesta');
Route::post('blackjack/recompensa', [BlackjackController::class, 'recompensa'])->name('blackjack.recompensa');

Route::get('cartamasalta', [CartaMasAltaController::class, 'show'])->name('cartamasalta');
Route::post('cartamasalta/apuesta', [CartaMasAltaController::class, 'apuesta'])->name('cartamasalta.apuesta');
Route::post('cartamasalta/recompensa', [CartaMasAltaController::class, 'recompensa'])->name('cartamasalta.recompensa');
Route::post('cartamasalta/refresh', [CartaMasAltaController::class, 'refresh_user_data'])->name('cartamasalta.refresh');

Route::get('tragaperras', [TragaperrasController::class, 'show'])->name('tragaperras');
Route::post('tragaperras/apuesta', [TragaperrasController::class, 'apuesta'])->name('tragaperras.apuesta');
Route::post('tragaperras/recompensa', [TragaperrasController::class, 'recompensa'])->name('tragaperras.recompensa');

Route::get('cajero', [CajeroController::class, 'show'])->name('cajero');
Route::post('cajero', [CajeroController::class, 'store'])->name('cajero.store');

Route::get('template', [TemplateController::class, 'show']);
