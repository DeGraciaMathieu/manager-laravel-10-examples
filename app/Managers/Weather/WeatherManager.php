<?php

namespace App\Managers\Weather;

use DeGraciaMathieu\Manager\Manager;
use App\Managers\Weather\Drivers\Aerisweather;
use App\Managers\Weather\Drivers\Openweathermap;

class WeatherManager extends Manager
{
    public function createOpenweathermapDriver(): Repository
    {
        $config = config('weather.drivers.openweathermap');

        $driver = new Openweathermap($config);

        return new Repository($driver);
    }

    public function createAerisweatherDriver(): Repository
    {
        $config = config('weather.drivers.aerisweather');

        $driver = new Aerisweather($config);

        return new Repository($driver);
    }

    public function getDefaultDriver(): string
    {
        return config('weather.default_driver');
    }
}