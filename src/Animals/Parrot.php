<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanSwim;
use App\Traits\Foot;

class Parrot extends Animal implements CanSwim
{
    use Foot;

    protected function getNoise(): string
    {
        return "coco";

    }
}