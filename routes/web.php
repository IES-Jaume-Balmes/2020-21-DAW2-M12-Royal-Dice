<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SessionsController;

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

Route::get('register', [RegistrationController::class, 'create']);
Route::post('register', [RegistrationController::class, 'store'])->name('register.store');

Route::get('login', [SessionsController::class, 'create']);
Route::post('login', 'SessionsController@store');
Route::get('logout', 'SessionsController@destroy');