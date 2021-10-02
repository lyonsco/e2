<!doctype html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>Number Matching Game</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>A random number between 1 and 10 is generated, called "target."</li>
        <li>Player 1 and Player 2 take turns "guessing" the number</li>
        <li>A random number is generated for Player 1.</li>
        <li>If Player 1's number matches the target, Player 1 wins.</li>
        <li>If Player 1's number does not match the target, a random number is generated for Player 2.</li>
        <li>If Player 2's number matches the target, Plater 2 wins.</li>
        <li>If Player 2's number does not match the target, another number is generated for Player 2.</li>
        <li>This continues until either Player 1 or Player 2 matches the target.</li>
        <li>Play as many rounds as you would like. Each round, alternate who gets the first guess.</li>
    </ul>

    <h2>Results</h2>
    <h3 style="color:blue;">The target number is <?php echo $targetNumber; ?></h3>
    <h3>Round 1: <b><?php echo $winner1; ?></b></h3>
    <ul>

        <li>Player 1 first guess: <b><?php echo $player1Guess; ?></b></li>
        <li>Player 2 first guess: <b><?php echo $player2Guess; ?></b></li>
    </ul>
    <h3>Round 2: <b><?php echo $winner2; ?></b></h3>
    <ul>
        <li>Player 1 second guess: <b><?php echo $player1Guess2; ?></b></li>
        <li>Player 2 second guess: <b><?php echo $player2Guess2; ?></b></li>
    </ul>
    <h3>Round 3: <b><?php echo $winner3; ?></b></h3>
    <ul>
        <li>Player 1 third guess: <b><?php echo $player1Guess3; ?></b></li>
        <li>Player 2 third guess: <b><?php echo $player2Guess3; ?></b></li>
    </ul>
    <h3>Round 4: <b><?php echo $winner4; ?></b></h3>
    <ul>
        <li>Player 1 fourth guess: <b><?php echo $player1Guess4; ?></b></li>
        <li>Player 2 fourth guess: <b><?php echo $player2Guess4; ?></b></li>
    </ul>
    <h3>Round 5: <b><?php echo $winner5; ?></b></h3>
    <ul>
        <li>Player 1 fifth guess: <b><?php echo $player1Guess5; ?></b></li>
        <li>Player 2 fifth guess: <b><?php echo $player2Guess5; ?></b></li>
    </ul>

</body>

</html>