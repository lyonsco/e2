<?php

session_start();

if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $playerGuess = $results['playerGuess'];
    $targetNumber = $results['targetNumber'];
    $outcome = $results['outcome'];
    $winner = $results['winner'];
}


require 'index-view.php';