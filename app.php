<?php

require __DIR__ . '/vendor/autoload.php';

use App\Animal;
use App\Animals\BubbleFish;
use App\Animals\CatFish;
use App\Animals\ClownFish;
use App\Animals\Dove;
use App\Animals\Elephant;
use App\Animals\Fish;
use App\Animals\Parrot;
use App\Animals\Zebra;

$animals = [
    Fish::class => [
        "count" => 5,
        "basename"=> "Poisson",
        "instance" => [],
    ],
    BubbleFish::class => [
    "count" => 2,
    "basename"=> "Elephant",
    "instance" => [],
],
    CatFish::class => [
        "count" => 2,
        "basename"=> "Elephant",
        "instance" => [],
    ],
    ClownFish::class => [
        "count" => 2,
        "basename"=> "Elephant",
        "instance" => [],
    ],
    Elephant::class => [
        "count" => 2,
        "basename"=> "Elephant",
        "instance" => [],
    ],
    Zebra::class => [
        "count" => 2,
        "basename"=> "Elephant",
        "instance" => [],
    ],
    Parrot::class => [
        "count" => 2,
        "basename"=> "Elephant",
        "instance" => [],
    ],
    Dove::class => [
        "count" => 2,
        "basename"=> "Elephant",
        "instance" => [],
    ],
];

foreach ($animals as $index => &$animal){
    for ($i = 0; $i < $animal["count"]; $i++) {

        /** @var Animal $instance */
        $instance = new $index($animal['basename'] . ' ' . ($i + 1));
        echo $instance->getName() . PHP_EOL;
        echo $instance->noise() . PHP_EOL;

        $animal['instance'][] = $instance;
    }
}

var_dump($animals);
