<?php

namespace App\Managers\Weather;

use App\Managers\Weather\Contracts\Driver;

class Repository
{
    public function __construct(
        private Driver $driver,
    ) {}

    public function itsRainingNow(string $city): bool
    {
        return $this->driver->itsRainingNow($city);
    }
}
