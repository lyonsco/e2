<?php

session_start();

$player = $_POST['player'];

# Cast the guess input to an integer
$playerGuess = (int)$player;

$targetNumber = $_SESSION['targetNumber'];

$winner = false;
$useNewTarget = false;
$outcome = 2;

    if ($playerGuess == '') {
        $outcome = 2;
        $winner = false;
        $useNewTarget = false;
    } else if ($playerGuess == $targetNumber) {
        $outcome = 0;
        $winner = true;
        $useNewTarget = true;
    } elseif ($playerGuess > $targetNumber) {
        $outcome = 1;
    } elseif ($playerGuess < $targetNumber) {
        $outcome = -1;
    }


$_SESSION['results'] = [
    'playerGuess' => $playerGuess,
    'targetNumber' => $targetNumber,
    'outcome' => $outcome,
    'winner' => $winner,
    'useNewTarget' => $useNewTarget
];

header('Location: index.php');