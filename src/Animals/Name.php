<?php

namespace App\Animals;

use function App\rand;

class Name
{
    public function setRandomName(): string
    {
        function rand()
        {
            return random_int(0, 26);
        }

        $base = "abcdefghijklmnopqrstuvwxyz";

        $name = $base[rand()] . $base[rand()] . $base[rand()] . $base[rand()];
        return $name;

    }

}