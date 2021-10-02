<?php

$targetNumber = rand(1, 10);


$guesses = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($guesses);

$player1Guess = array_pop($guesses);
$player2Guess = array_pop($guesses);

if ($player1Guess == $targetNumber){
    $winner = "Player 1 Wins!";
} elseif ($player2Guess == $targetNumber) {
    $winner = "Player 2 Wins!"; 
} else {
    $winner = "No Winner :(";
}

if ($winner == "No Winner :(") {
    $player1Guess2 = array_pop($guesses);
    $player2Guess2 = array_pop($guesses);
}



// $player1Guess1 = array_pop($guesses);
// $player2Guess1 = [];
// $player1Guess2 = [];

// if ($player1Guess1 == $targetNumber) {
//     $winner = 'Player 1 Wins!';
// } else {
//     $player2Guess1 = array_pop($guesses);
// }

// if ($player2Guess1 == $targetNumber) {
//     $winner = 'Player 2 Wins!';
// } else {
//     $player1Guess2 = array_pop($guesses);
// }





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