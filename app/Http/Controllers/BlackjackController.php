<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlackjackController extends Controller
{
    public function show(){
        return view('blackjack');
    }
}
