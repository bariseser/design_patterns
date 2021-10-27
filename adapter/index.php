<?php

use Bariseser\AdapterPattern\BasketAdapter;
use Bariseser\AdapterPattern\SoccerAdapter;
use Bariseser\AdapterPattern\SportManager;

include 'vendor/autoload.php';

$soccer = [
    'teamA' => "Alanya Spor",
    'teamB' => "Beşiktaş",
    'teamAScore' => 1,
    'teamBScore' => 2
];

$manager = new SportManager(new SoccerAdapter(), $soccer);
echo $manager->sendNotification().PHP_EOL;

$basket = [
    'teamA' => "Alanya Spor",
    'teamB' => "Beşiktaş",
    'TeamAScoreP1' => 15,
    'TeamAScoreP2' => 28,
    'TeamAScoreP3' => 45,
    'TeamAScoreP4' => 78,
    'TeamBScoreP1' => 15,
    'TeamBScoreP2' => 25,
    'TeamBScoreP3' => 35,
    'TeamBScoreP4' => 45,
];

$manager = new SportManager(new BasketAdapter(), $basket);
echo $manager->sendNotification().PHP_EOL;
