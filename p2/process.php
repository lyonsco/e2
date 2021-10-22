<?php

session_start();

$player = (int)$_POST['player'];
$playerGuess = (int)$player;

$targetNumber = rand(1, 10);

$winner = false;

if ($playerGuess == $targetNumber) {
    $outcome = 0;
    $winner = true;
}
    elseif ($playerGuess > $targetNumber) {
    $outcome = 1;
    $winner = false;
} else {
    $outcome = -1;
    $winner = false;
}

$_SESSION['results'] = [
    'playerGuess' => $playerGuess,
    'targetNumber' => $targetNumber,
    'outcome' => $outcome,
    'winner' => $winner
];

header('Location: index.php');