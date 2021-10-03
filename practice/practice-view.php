<!doctype html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>Number Matching Game</h1>

    <h2>Results</h2>
    <h3 style="color:blue;">The target number is <?php echo $targetNumber; ?></h3>



    <?php while ($winner == false) {
    $player1Guess = array_pop($guesses);
    $player2Guess = array_pop($guesses);
    if ($player1Guess == $targetNumber) {
        $outcome = "Player 1 Wins!";
        $winner = true;
    } elseif ($player2Guess == $targetNumber) {
        $outcome = "Player 2 Wins!";
        $winner = true; 
    }
?>

    <ul>

        <li>Player 1 first guess: <b><?php echo $player1Guess; ?></b></li>
        <li>Player 2 first guess: <b><?php echo $player2Guess; ?></b></li>
    </ul>

    <?php } ?>

</body>

</html>