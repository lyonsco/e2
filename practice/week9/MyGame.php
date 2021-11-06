<?php

class MyGame extends Game {
    protected function determineOutcome($playerMove, $computerMove)
    {
        if ($computerMove == $playerMove) {
            return 'tie';
        } elseif ($playerMove == 'rock' and $computerMove == 'scissors' or $playerMove == 'paper' and $computerMove == 'rock' or $playerMove == 'scissors' and $computerMove == 'paper') {
            return 'won';
        } else {
            return 'lost';
        }
    }
}