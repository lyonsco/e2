@extends('templates.master')

@section('title')
    Project 3
@endsection

@section('content')

    <div class="instructions">
        <h2>Instructions</h2>
        <p>The computer is thinking of a number between 1 and 10. Enter a guess, and we will let you know if you are too
            low
            or too high. See how quickly you can guess the computer's number!</p>
    </div>

    <div class="form">
        <form method='POST' action='process.php'>
            <label for='guess'>Guess</label>
            <input type='text' id='guess' name='player'>
            <button type='submit'>Play</button>
        </form>
    </div>

    <div class="results">
        <?php if(isset($results)) { ?>
        <h2>Results</h2>
        <?php if($outcome == 0) { ?>
        <p>You guessed the number!</p>
        <?php } elseif ($outcome == 1) { ?>
        <p>Too high! Guess again.</p>
        <?php } elseif ($outcome == -1) { ?>
        <p>Too low! Guess again.</p>
        <?php } elseif ($outcome == 2) { ?>
        <p>Please enter a guess.</p>
        <?php } ?> <?php } ?>
    </div>

@endsection
