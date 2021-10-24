<!doctype html>
<html lang='en'>

<head>
    <title>Project 2</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>Number Guessing Game</h1>

    <form method='POST' action='process.php'>
        <div>
            <label for='guess'>Guess</label>
            <input type='text' id='guess' name='player'>
        </div>
        <br>
        <div>
            <button type='submit'>Play</button>
        </div>
    </form>



    <?php if(isset($results)) { ?>
    <h2>Results</h2>
    <?php if($outcome == 0) { ?> You guessed the number!
    <?php } elseif ($outcome == 1) { ?> Too high! Guess again. <?php } elseif ($outcome == -1) { ?> Too low! Guess
    again. <?php } elseif ($outcome == 2) { ?> Please enter a guess. <?php } ?> <?php } ?>
</body>

</html>