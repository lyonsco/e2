<?php


function vowelCount($word)
{
    $letters = str_split($word);
    $count = 0;
    foreach ($letters as $key => $letter) {
        if (in_array($letter, ['a', 'e', 'i', 'o', 'u'])) {
            $count++;
            var_dump($count);


        }
    }
    return $count;
}

$word = 'ooaai';
$count = vowelCount($word);

require 'index-view.php';