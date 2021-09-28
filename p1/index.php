<?php

$targetNumber = rand(1, 10);


$guesses = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($guesses);

$player1Guess = array_pop($guesses);

while ($player1Guess != $targetNumber and $player2Guess != $targetNumber) {
    $player1Guess = array_pop($guesses);
    $player2Guess = array_pop($guesses);
}



// if ($targetNumber === $player1Guess) {
//     var_dump('Player 1 wins');
// } else {
//     $player2Guess = array_pop($guesses);
// };




// if ($player1Guess == $targetNumber) {
//     echo $score1;
// } else {
//     $player2Guess = array_pop($guesses);
// };

// if ($player2Guess == $targetNumber) {
//     $score = "Player 2 Wins!";
// } else {
//     $player1Guess = array_pop($guesses);
// };


require 'index-view.php';