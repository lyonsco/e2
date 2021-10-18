<?php

$targetNumber = rand(1, 10);


$guesses = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($guesses);
$winner = false;
$player1Guess = [];
$player2Guess = [];
$guessKey = 0;
$outcome = 0;

while ($winner == false) {
    $guessKey++;

    array_push($player1Guess, array_pop($guesses));
    array_push($player2Guess, array_pop($guesses));
    if (in_array($targetNumber, $player1Guess)) {
        $outcome = 1;
        $winner = true;
    } elseif (in_array($targetNumber, $player2Guess)) {
        $outcome = 2;
        $winner = true; 
    } else {
        $winner = false;
    }

}

require 'index-view.php';