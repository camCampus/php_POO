<?php

namespace App\Enclosure;

use App\Animal;

class Enclosure
{
    /** @var Animal[] $animals */
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function __toString(): string
    {
        $output = '';

        foreach ($this->animals as $animal) {
            $output .= $animal->getName() . " => " . $animal->noise() . PHP_EOL;
        }

        return $output;
    }






















//    /** @var Animal[] $animals */
//    private array $animals = [];
//
//    public function addAnimal(Animal $animal)
//    {
//        $this->animals[] = $animal;
//    }
//
//    public function __toString(): string
//    {
//        foreach ($this->animals as $animal) {
//            echo $animal->getName();
//        }
//    }
}