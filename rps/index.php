<?php

session_start();
require __DIR__.'/vendor/autoload.php';

use App\MyGame;

if(isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $playerMove = $results['playerMove'];
    $computerMove = $results['computerMove'];
    $outcome = $results['outcome'];

    $_SESSION['results'] = NULL;
}

$myGame = new MyGame();

$myResults = $myGame->play('heads');
var_dump($myResults);

// $choices = ['rock', 'paper', 'scissors'];
// $player1Choice = $choices[rand(0,2)];
// var_dump($player1Choice);




//var_dump($game->$results);
//var_dump($game->results);
//var_dump($game->getResults());

//var_dump($game->play($playerMove));
# Each invocation of the `play` method will play and track a new round of player (given move) vs. computer
//Debug::dump($game->play($player1Choice));



require 'index-view.php';