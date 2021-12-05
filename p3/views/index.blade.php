@extends('templates.master')

@section('title')
    Project 3
@endsection

@section('content')

    @if ($outcome == 0)
        <div class='alert alert-success'>Correct! You matched the computer's number!</div>
    @elseif ($outcome == 1)
        <div class='error alert alert-danger'>Too high! Guess again.</div>
    @elseif ($outcome == -1)
        <div class='error alert alert-danger'>Too low! Guess again.</div>
    @else
        <div class='error alert alert-danger'>Please enter a guess</div>
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

    <div class="instructions">
        <h2>Instructions</h2>
        <p>The computer is thinking of a number between 1 and 10. Enter a guess, and we will let you know if you are too
            low
            or too high. See how quickly you can guess the computer's number!</p>
    </div>

    <div class="form">
        <form method='POST' action='/save-guess'>
            <label for='guess'>Guess</label>
            <input type='text' id='guess' name='guess' value='{{ $app->old('guess') }}'>
            <button type=' submit'>Play</button>
        </form>
    </div>

    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
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
