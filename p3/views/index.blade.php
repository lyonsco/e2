@extends('templates.master')



@section('content')


    {{-- @if ($outcome == 0)
    <div class='alert alert-success'>Correct! You matched the computer's number!</div>
@elseif ($outcome == 1)
    <div class='error alert alert-danger'>Too high! Guess again.</div>
@elseif ($outcome == -1)
    <div class='error alert alert-danger'>Too low! Guess again.</div>
@else
    <div class='error alert alert-danger'>Please enter a guess</div>
@endif --}}


    <div class="instructions">
        <h2>Instructions</h2>
        <p>The computer is thinking of a number between 1 and 10. Enter a guess, and we will let you know close you were to
            the target number that the computer had in mind.</p>
    </div>

    <div class="form">
        <form method='POST' action='/process'>
            <label for='guess'>Guess</label>
            <input type='text' test='guess-text' id='guess' name='guess' value='{{ $app->old('guess') }}'>
            <button test='submit-button' type='submit'>Play</button>
        </form>
    </div>

    <a href='/history'>Game History</a>

    @if ($app->errorsExist())
        <ul test='validation-error' class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if ($outcome)
        <div test='results-div' class="results">
            <p>The target number was <span test='target-output'>{{ $targetNumber }}</span>.</p>
            @if ($winner)
                <span test='won-output' class="won">
                    Congrats, you guessed the number!
                </span>
            @else
                <span test='lost-output' class="lost">
                    Sorry, you didn't guess the number.<br>
                    <b>Digits off</b>: {{ $digitsOffTarget }} <br>
                </span>
            @endif
        </div>
    @endif

@endsection
