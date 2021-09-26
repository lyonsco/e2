<?php

$moves = [
    'rock',
    'paper',
    'scissors',
]; # array of strings

$strawLengths = [
    2, 2, 2, 2, 1,
];

$mixed = ['rock', 1, 84, true];

// echo $moves[0];
// echo $moves[1];
// echo $moves[2];

// var_dump($moves);

// $randomNumber = rand(0, 2);

// var_dump($randomNumber);

// $move = $moves[$randomNumber];

// var_dump($move);



$penny_value = .01;
$nickel_value = .05;
$dime_value = .10;
$quarter_value = .25;
$half_dollar_value = .50;

$coin_values = [
    'penny' => .01, 
    'nickel' => .05,
    'dime' => .10,
    'quarter' => .25,
];

$coin_counts = [
    'penny' => 100,
    'nickel' => 25,
    'dime' =>100,
    'quarter' => 34,
];

$coins = [
    'penny' => [
        'count' => 100, 
        'value' => .01
    ],
    'nickel' => [
        'count' => 25, 
        'value' => .05
    ],
    'dime' => [
        'count' => 100, 
        'value' => .10
    ],
    'quarter' => [
        'count' => 34, 
        'value' => .25
    ],
    'halfDollar' => [
        'count' => 10, 
        'value' => .50
    ],
];

//var_dump($coin_values['quarter']);

$total = 0;

// foreach ($coin_counts as $coin => $count) {
//     $total = $total + ($count * $coin_values[$coin]);
// }

foreach($coins as $coin => $info) {
    $total = $total + ($info['count'] * $info['value']);
}
//var_dump($total);


// $playerDraw = $playerCards[count($playerCards) - 1];
// $playerDraw = array_pop($playerCards);
//var_dump($playerCards);
//var_dump($playerDraw);

//var_dump(date('F j Y'));

# Player's Choice 
$coin = ['heads', 'tails'];
$randomNumber = rand(0, 1);
$player1Choice = $coin[$randomNumber];

//var_dump($player1Choice);

# Coin Flip
$randomNumber = rand(0, 1);
$flip = $coin[$randomNumber];

// if ($player1Choice == $flip) {
//     var_dump('Player 1 wins!');
// } else {
//     var_dump('Player 1 lost.');
// }

$age = 25;
$privileges = [];

if ($age > 16) {
    $privileges[] = 'drive';
}
if ($age > 18) {
    $privileges[] = 'vote';
}
if ($age > 21) {
    $privileges[] = 'purchase alcohol';
}
if ($age > 75) {
    $privileges[] = 'retire';
}

// var_dump($privileges);

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
shuffle($cards);

//$playerCards = array_splice($cards, 0, count($cards) / 2);
//$computerCards = $cards;

//array_pop($cards);


$playerCards = [];
$computerCards = [];


foreach ($cards as $key => $value) {
    if ($key % 2 == 0) {
        array_push($playerCards, array_pop($cards));
    } else
    {
        array_push($computerCards, array_pop($cards));
    }
}


var_dump($playerCards);
echo "<br>";

var_dump($computerCards);
echo "<br>";

echo (3 % 5)."\n";   