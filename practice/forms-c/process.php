<?php

session_start();

$answer = $_POST['answer'];
$origWord = $_SESSION['origWord'];

$haveAnswer = true;



if($answer == '') {
    $haveAnswer = false;
} else if ($answer == $origWord) {
    $correct = true;
} else {
    $correct = false;
}

$_SESSION['results'] = [
    'haveAnswer' => $haveAnswer,
    'correct' => $correct
];

header('Location: index.php');