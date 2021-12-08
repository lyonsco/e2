<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $guess = $this->app->old('guess');
        $targetNumber = $this->app->old('targetNumber');
        $winner = $this->app->old('winner');
        $outcome = $this->app->old('outcome');
        $digitsOffTarget = $this->app->old('digitsOffTarget');
        
        
        return $this->app->view('index', [
            'guess' => $guess,
            'targetNumber' => $targetNumber,
            'winner' => $winner,
            'outcome' => $outcome,
            'digitsOffTarget' => $digitsOffTarget
        ]);
    }

    public function process()
    {
        $this->app->validate([
             'guess' => 'required|digit|maxLength:2'
       ]);

        $guess = $this->app->input('guess');

        $targetNumber = rand(1,10);

    $winner = false;
    $outcome = 2;

    if ($guess == '') {
        $outcome = 2;
        $winner = false;
    } else if ($guess == $targetNumber) {
        $outcome = 0;
        $winner = true;
    } elseif ($guess > $targetNumber) {
        $outcome = 1;
    } elseif ($guess < $targetNumber) {
        $outcome = -1;
    }

    $digitsOffTarget = abs($targetNumber - $guess);

    #Persist round details to the database

    $this->app->db()->insert('rounds', [
        'guess' => $guess,
        'targetNumber' => $targetNumber,
        'winner' => ($winner) ? 1 : 0,
        'digitsOffTarget' => $digitsOffTarget,
        'timestamp' => date('Y-m-d H:i:s')
    ]);

    return $this->app->redirect('/', [
        'guess' => $guess,
        'targetNumber' => $targetNumber,
        'winner' => $winner,
        'outcome' => $outcome,
        'digitsOffTarget' => $digitsOffTarget
    ]);
    }

    public function history()
    {
        $rounds = $this->app->db()->all('rounds');

        return $this->app->view('history', ['rounds' => $rounds]);
    }

    public function round()
    {
        $id = $this->app->param('id');

        $round = $this->app->db()->findById('rounds', $id);
        
        return $this->app->view('round', ['round' => $round]);
    }
}