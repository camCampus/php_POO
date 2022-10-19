<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;


class Parrot extends Animal implements CanFly
{
    protected function getNoise(): string
    {
        return "coco";
    }
}