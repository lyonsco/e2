<!doctype html>
<html lang='en'>

<head>
    <title>Rock, Paper, Scissors</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>Rock, Paper, Scissors</h1>
    <div class="instructions">
        <h2>Instructions</h2>
        <p>Choose rock, paper, or scissors to challenge the computer. If your choice beats the computer's selection, you
            win. If you both make the same selection, it is a tie.</p>
    </div>

    <div class="form">
        <form method='POST' action='process.php'>Choose your Move:
            <input type='radio' id='rock' name='playerMove' value='rock'>
            <label for='rock'>Rock</label>

            <input type='radio' id='paper' name='playerMove' value='paper'>
            <label for='paper'>Paper</label>

            <input type='radio' id='scissors' name='playerMove' value='scissors'>
            <label for='scissors'>Scissors</label>

            <button type='submit'>Play</button>
        </form>
    </div> -->
    <div class="results">
        <!-- <?php if(isset($outcome)) { ?> -->
        <h2>Results</h2>
        <p>Your guess: <?php echo $playerMove; ?></p>
        <p>The computer's guess: <?php echo $computerMove; ?></p>
        <?php if($outcome== 'won') { ?>
        <p>You beat the computer!</p>
        <?php } elseif ($outcome == 'lost') { ?>
        <p>The computer won.</p>
        <?php } elseif ($outcome == 'tie') { ?>
        <p>It's a tie.</p>
        <?php } ?> <?php } ?>
    </div>

</html>