<!doctype html>
<html lang='en'>

<head>
    <title>Mystery Word Scramble</title>
    <meta charset='utf-8'>
</head>

<body>

    <form method='POST' action='process.php'>
        <h1>Mystery Word Scramble</h1>

        <p>Mystery word: <?php echo $scrambledWord; ?></p>
        <p>Hint: <?php echo $hint; ?></p>

        <!-- <input type="hidden" id="origWord" name="origWord" value="<?php echo $word; ?>"> -->

        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>

        <button type='submit'>Check answer</button>
    </form>
    <?php if(isset($results)) { ?>
    <h1>Results</h1>

    <?php if ($haveAnswer == false) { ?>
    Please enter an answer.

    <?php } elseif ($correct) { ?>
    You got it correct!
    <?php } else { ?>
    Incorrect
    <?php } ?>
    <?php } ?>

</body>

</html>