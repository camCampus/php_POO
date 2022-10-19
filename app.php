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
use App\Enclosure\Enclosure;
use App\Zoo;

//$animals = [
//    Fish::class => [
//        "count" => 5,
//        "basename"=> "Poisson",
//        "instance" => [],
//    ],
//    BubbleFish::class => [
//    "count" => 3,
//    "basename"=> "BubbleFish",
//    "instance" => [],
//],
//    CatFish::class => [
//        "count" => 2,
//        "basename"=> "CatFish",
//        "instance" => [],
//    ],
//    ClownFish::class => [
//        "count" => 1,
//        "basename"=> "ClownFish",
//        "instance" => [],
//    ],
//    Elephant::class => [
//        "count" => 2,
//        "basename"=> "Elephant",
//        "instance" => [],
//    ],
//    Zebra::class => [
//        "count" => 1,
//        "basename"=> "Zebra",
//        "instance" => [],
//    ],
//    Parrot::class => [
//        "count" => 10,
//        "basename"=> "Parrot",
//        "instance" => [],
//    ],
//    Dove::class => [
//        "count" => 2,
//        "basename"=> "Dove",
//        "instance" => [],
//    ],
//];
//
//foreach ($animals as $index => &$animal){
//    for ($i = 0; $i < $animal["count"]; $i++) {
//
//        /** @var Animal $instance */
//        $instance = new $index($animal['basename'] . ' ' . ($i + 1));
//        echo $instance->getName() . PHP_EOL;
//        echo $instance->noise() . PHP_EOL;
//
//        $animal['instance'][] = $instance;
//    }
//}

//$r = new Fish("cam");
//$b = new \App\Animals\Whale("zeffzfze");
//$t = new Enclosure;
//$t->addAnimal($r);
//$t->addAnimal($b);
//echo $t;







