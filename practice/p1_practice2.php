<?php

$targetNumber = rand(1, 10);


$guesses = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($guesses);
$keptGuesses=[];

$winner = false;

while ($winner == false) {
    $player1Guess = array_pop($guesses);
    $player2Guess = array_pop($guesses);
    array_push($keptGuesses,$player1Guess,$player2Guess);

    if ($player1Guess == $targetNumber) {
        $outcome = "Player 1 Wins!";
        $winner = true;
    } elseif ($player2Guess == $targetNumber) {
        $outcome = "Player 2 Wins!";
        $winner = true;
    }
}
require 'practice-view2.php';


