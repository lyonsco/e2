@extends('templates/master')

@section('title')
    Round Details
@endsection

@section('content')
    <h2>Round Details</h2>
    <ul>
        <li>Round ID: {{ $round['id'] }}</li>
        <li>Player's Guess: {{ $round['guess'] }}</li>
        <li>Target Number: {{ $round['targetNumber'] }}</li>
        <li>Player {{ $round['winner'] ? 'won' : 'lost' }}</li>
        <li>Timestamp: {{ $round['timestamp'] }}</li>
    </ul>
    <a href='/history'>Back to Round History</a>
@endsection
