<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {

$guessSaved = $this->app->old('guessSaved');
$outcome = $this->app->old('outcome');
$winner = $this->app->old('winner');
$useNewTarget = $this->app->old('useNewTarget');
        
        return $this->app->view('index', [
            'guessSaved' => $guessSaved,
            'outcome' => $outcome,
            'winner' => $winner,
            'useNewTarget' => $useNewTarget
        ]);

        
    }

    public function history()
    {
        return $this->app->view('history', [
            'history' => 'Game History'
        ]);
    }



    public function saveGuess()
    {

        
       $this->app->validate([
        'guess' => 'required|digit|maxLength:2'
       ]);
       
        $guess = $this->app->input('guess');


        $targetNumber = rand(1,10);
        $winner = false;
        $useNewTarget = false;
        $outcome = 2;
        $results = null;
        $lastTarget = null;

        // if ($guess == $targetNumber){
        //     return 'You win';
        // } else {
        //     return $this->app->redirect('/' , ['guessSaved' => true]);
        // }
        
        if ($guess == '') {
                $outcome = 2;
                $winner = false;
                $useNewTarget = false;
                return $this->app->redirect('/' , [
                    'guessSaved' => true,
                    'outcome' => 2,
                    'winner' => false,
                    'useNewTarget' => false
                ]);
            } else if ($guess == $targetNumber) {
                $outcome = 0;
                $winner = true;
                $useNewTarget = true;
                return $this->app->redirect('/' , [
                    'guessSaved' => true,
                    'outcome' => 0,
                    'winner' => true,
                    'useNewTarget' => true
                ]);
            } elseif ($guess > $targetNumber) {
                $outcome = 1;
                return $this->app->redirect('/' , [
                    'guessSaved' => true,
                    'outcome' => 1,
                    'winner' => false,
                    'useNewTarget' => false
                ]);
            } elseif ($guess < $targetNumber) {
                $outcome = -1;
                return $this->app->redirect('/' , [
                    'guessSaved' => true,
                    'outcome' => -1,
                    'winner' => false,
                    'useNewTarget' => false
                ]);
            }



            // $results = $this->app->sessionSet('results', [
            //     'targetNumber' => $targetNumber,
            //     'winner' => $winner,
            //     'useNewTarget' => $useNewTarget,
            //     'outcome' => $outcome,
            //     'guess' => $guess,
            //     'lastTarget' => $this->app->sessionGet('targetNumber')
            // ]);

            // if ($useNewTarget) {
            //     $targetNumber = rand(1, 10);
            // } else {
            //     $targetNumber = $lastTarget;
            // }

            //     $results = null;
// }




            // return $results['targetNumber'];
       #Persist guess to database...


    }
}