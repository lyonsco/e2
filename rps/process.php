<?php

session_start();

require __DIR__.'/vendor/autoload.php';

use RPS\Game;

$game = new Game();

$playerMove = $_POST['playerMove'];

//var_dump($playerMove);

//var_dump($game->play($playerMove));
$results = $game->play($playerMove);

//var_dump($results['player']);


// $results = [
//     'player' => $playerMove,
//     'computer' => $computerMove,
//     'outcome' => $outcome,
//     'timestamp' => date('g:i:s a')
// ];

$_SESSION['results'] = [
    'playerMove' => $results['player'],
    'computerMove' => $results['computer'],
    'outcome' => $results['outcome']
];

var_dump($results);




//var_dump($myGame->play('heads'));

header('Location: index.php');