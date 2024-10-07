<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoxController extends Controller {
    public function showBoxes() {
        return view('boxes');
    }
    public function revealPrize($boxId) {
        $prizes = [
            '🎮 A Steamdeck!', 
            '🍫 A Dark Chocolate Bar!', 
            '🚗 A Porsche 911 GT3 RS', 
            '🤡 ഒലക്ക!', 
            '🌟 A Star!'
        ];

        $prize = $prizes[array_rand($prizes)];

        return view('reveal', ['prize' => $prize, 'boxId' => $boxId]);
    }
}
