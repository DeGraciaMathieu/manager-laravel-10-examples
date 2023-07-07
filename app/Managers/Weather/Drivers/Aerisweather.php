<?php

namespace App\Managers\Weather\Drivers;

use App\Managers\Weather\Contracts\Driver;

class Aerisweather implements Driver
{
    public function __construct(
        private array $config,
    ) {}

    public function itsRainingNow(string $city): bool
    {
        // call Aerisweather api to know if it is raining in this city

        return true;
    }
}
