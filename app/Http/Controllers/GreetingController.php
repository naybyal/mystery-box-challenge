<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller {
    public function displayGreeting() {
        return view('greeting', ['message' => 'Nabiel sends his regards!']);
    }
}