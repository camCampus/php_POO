<?php

namespace App\Animals;

use App\Animal;
use App\Traits\Foot;

class Zebra extends Animal
{
    use Foot;

    protected function getNoise(): string
    {
        return "hiiiii";

    }
}