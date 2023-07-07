<?php

namespace App\Managers\Weather\Contracts;

interface Driver
{
    public function itsRainingNow(string $city): bool;
}
