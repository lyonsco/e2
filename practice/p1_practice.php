<?php

$targetNumber = rand(1, 10);


$guesses = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($guesses);

$winner = false;


require 'practice-view.php';

while ($winner == false) {
    $player1Guess = array_pop($guesses);
    $player2Guess = array_pop($guesses);
    if ($player1Guess == $targetNumber) {
        $outcome = "Player 1 Wins!";
        $winner = true;
    } elseif ($player2Guess == $targetNumber) {
        $outcome = "Player 2 Wins!";
        $winner = true; 
    }
}