<?php

session_start();

$targetNumber = rand(1, 10);

# Default value - assume new game
$useNewTarget = true;


if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $playerGuess = $results['playerGuess'];
    $targetNumber = $results['targetNumber'];
    $outcome = $results['outcome'];
    $winner = $results['winner'];
    $lastTarget = $_SESSION['targetNumber'];

    # If they guess the number (winner is true), choose a new target number
    $useNewTarget = $winner;

    $_SESSION['results'] = null;
}

if ($useNewTarget) {
        $targetNumber = rand(1, 10);
    } else {
        $targetNumber = $lastTarget;
    }

$_SESSION['targetNumber'] = $targetNumber;

require 'index-view.php';