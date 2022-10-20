<?php

namespace App;

use App\Caracteristique\Cara;
use App\Enclosure\Enclosure;
use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Zoo
{

    private static bool $isInit = false;

    private static Enclosure $aquarium;
    private static Enclosure $aviary;
    private static Enclosure $fence;

    private static function init(): void
    {
        self::$aquarium = new Enclosure;
        self::$aviary = new Enclosure;
        self::$fence = new Enclosure;

        self::$isInit = true;
    }

    public static function addAnimal(Animal $animal)
    {
        if (!self::$isInit)
            self::init();

        if ($animal instanceof CanSwim) {
            self::$aquarium->addAnimal($animal);
        }
        if ($animal instanceof CanFly) {
            self::$aviary->addAnimal($animal);
        }

        if ($animal instanceof CanWalk) {
            self::$fence->addAnimal($animal);
        }
    }

    public static function visitTheZoo()
    {
        echo "Aquarium =>".PHP_EOL. self::$aquarium .PHP_EOL. "Fence =>" .PHP_EOL. self::$fence .PHP_EOL. "Aviary =>" .PHP_EOL. self::$aviary ;
    }
}