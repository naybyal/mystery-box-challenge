<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoxController extends Controller {
    // Display the list of mystery boxes
    public function showBoxes() {
        return view('boxes');
    }

    // Reveal the prize inside the selected box
    public function revealPrize($boxId) {
        $prizes = [
            '🎉 A Free Coffee!', 
            '🍫 A Chocolate Bar!', 
            '🚗 A Toy Car!', 
            '🔑 A Key to Nothing!', 
            '🌟 A Star!'
        ];

        // Randomly select a prize
        $prize = $prizes[array_rand($prizes)];

        // Return the reveal view with the prize and boxId
        return view('reveal', ['prize' => $prize, 'boxId' => $boxId]);
    }
}
