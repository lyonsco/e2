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


    <ul>
        <?php foreach ($keptGuesses as $key => $guess) {

    if ($guess % 2 == 0) {
        ?>
        <li>Player 1 first guess: <b><?php echo $player1Guess; ?></b></li>
        <?php
    } else {
        ?>
        <li>Player 2 first guess: <b><?php echo $player2Guess; ?></b></li>
        <?php
    }
    }
    ?>
    </ul>
</body>

</html>