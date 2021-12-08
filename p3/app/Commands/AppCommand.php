<?php

namespace App\Commands;

class AppCommand extends Command
{

    public function fresh() {
        $this->migrate();
        $this->seed();
    }

    public function migrate() {
        $this->app->db()->createTable('rounds', [
            'guess' => 'int',
            'targetNumber' => 'int',
            'winner' => 'tinyint(1)',
            'digitsOffTarget' => 'int',
            'timestamp' => 'timestamp'
        ]);

        dump('Migrations complete');
    }

    public function seed() {
        for($i = 0; $i < 10; $i++) {
            $this->app->db()->insert('rounds', [
                'guess' => rand(1, 10),
                'targetNumber' => rand(1, 10),
                'winner' => rand(0, 1),
                'digitsOffTarget' => rand(0, 9),
                'timestamp' => '2021-12-06 13:32:34'
            ]);
        }

        dump('Seeds complete');
    }
}