<?php

namespace App;

use App\Enclosure\Enclosure;
use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Zoo {
    private static Enclosure $aquarium;
    private static Enclosure $aviary;
    private static Enclosure $fence;

    public function __construct()
    {
        //Création d'un obj Enclos
        self::$aquarium = new Enclosure;
        self::$aviary = new Enclosure;
        self::$fence = new Enclosure;
    }

    public static function addAnimal(Animal $animal)
    {
        if ($animal instanceof CanSwim){
            self::$aquarium->addAnimal($animal);
        }
        if ($animal instanceof CanFly){
            self::$fence->addAnimal($animal);
        }
        if ($animal instanceof CanWalk){
            self::$fence->addAnimal($animal);
        }
    }
}