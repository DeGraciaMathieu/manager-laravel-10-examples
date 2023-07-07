# Manager examples

Project samples for https://github.com/DeGraciaMathieu/Manager

```php

use App\Managers\Weather\WeatherManager;

app(WeatherManager::class)->itsRainingNow('Paris'); // true
# Using the default driver configured by the getDefaultDriver method

app(WeatherManager::class)->driver('openweathermap')->itsRainingNow('Paris'); // true
app(WeatherManager::class)->driver('aerisweather')->itsRainingNow('Paris'); // true
```
