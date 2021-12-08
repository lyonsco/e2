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
        <p>The computer is thinking of a number between 1 and 10. Enter a guess, and we will let you know if you are too
            low
            or too high. See how quickly you can guess the computer's number!</p>
    </div>

    <div class="form">
        <form method='POST' action='/process'>
            <label for='guess'>Guess</label>
            <input type='text' id='guess' name='guess' value='{{ $app->old('guess') }}'>
            <button type=' submit'>Play</button>
        </form>
    </div>

    <a href='/history'>Game History</a>

    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if ($outcome)
        <div class="results">
            The target nummber was {{ $targetNumber }}.
            @if ($winner)
                <span class="won">
                    Congrats, you guessed the number!
                </span>
            @else
                <span class="lost">
                    Sorry, you didn't guess the number. You were {{ $digitsOffTarget }} digits off. Please play again.
                </span>
            @endif
        </div>
    @endif

    {{-- <div class="results">
        <h2>Results</h2>
        @if ($outcome == 0)
            <p>You guessed the number!</p>
        @elseif ($outcome == 1)
            <p>Too high! Guess again.</p>
        @elseif ($outcome == -1)
            <p>Too low! Guess again.</p>
        @elseif ($outcome == 2)
            <p>Please enter a guess.</p>
        @endif
 </div> --}}

@endsection
