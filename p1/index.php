<?php

$targetNumber = rand(1, 10);


$guesses = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($guesses);

$player1Guess2 = "Not Needed";
$player2Guess2 = "Not Needed";
$player1Guess3 = "Not Needed";
$player2Guess3 = "Not Needed";
$player1Guess4 = "Not Needed";
$player2Guess4 = "Not Needed";
$player1Guess5 = "Not Needed";
$player2Guess5 = "Not Needed";
$winner2 = "Not Needed";
$winner3 = "Not Needed";
$winner4 = "Not Needed";
$winner5 = "Not Needed";
$winner = false;

# Round 1
$player1Guess = array_pop($guesses);
$player2Guess = array_pop($guesses);

if ($player1Guess == $targetNumber){
    $winner1 = "Player 1 Wins!";
    $winner = true;
} elseif ($player2Guess == $targetNumber) {
    $winner1 = "Player 2 Wins!"; 
    $winner = true;
} else {
    $winner1 = "No Winner :(";
    $player1Guess2 = array_pop($guesses);
    $player2Guess2 = array_pop($guesses);
}

#Round 2
if ($winner == false) {
    if ($player1Guess2 == $targetNumber) {
        $winner2 = "Player 1 Wins!";
        $winner = true;
    } elseif ($player2Guess2 == $targetNumber) {
        $winner2 = "Player 2 Wins!";
        $winner = true;
    } else {
        $winner2 = "No Winner :(";
        $player1Guess3 = array_pop($guesses);
        $player2Guess3 = array_pop($guesses);
    }
}
#Round 3
if ($winner == false) {
    if ($player1Guess3 == $targetNumber) {
        $winner3 = "Player 1 Wins!";
        $winner = true;
    } elseif ($player2Guess3 == $targetNumber) {
        $winner3 = "Player 2 Wins!";
        $winner = true;
    } else {
        $winner3 = "No Winner :(";
        $player1Guess4 = array_pop($guesses);
        $player2Guess4 = array_pop($guesses);
    }
}

#Round 4
if ($winner == false) {
    if ($player1Guess4 == $targetNumber) {
        $winner4 = "Player 1 Wins!";
        $winner = true;
    } elseif ($player2Guess4 == $targetNumber) {
        $winner4 = "Player 2 Wins!";
        $winner = true;
    } else {
        $winner4 = "No Winner :(";
        $player1Guess5 = array_pop($guesses);
        $player2Guess5 = array_pop($guesses);
    }
}

#Round 5
if ($winner == false) {
    if ($player1Guess5 == $targetNumber) {
        $winner5 = "Player 1 Wins!";
        $winner = true;
    } elseif ($player2Guess5 == $targetNumber) {
        $winner5 = "Player 2 Wins!";
        $winner = true;
    } else {
        $winner5 = "No Winner :(";
    }
}

require 'index-view.php';