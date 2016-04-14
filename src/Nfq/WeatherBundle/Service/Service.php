<?php

namespace Nfq\WeatherBundle\Service;
use Nfq\WeatherBundle\Location\Location;
use Nfq\WeatherBundle\Provider\OpenWeatherMapProvider;
use Nfq\WeatherBundle\Weather\Weather;

class Service
{
    private $provider;
    public function __construct(OpenWeatherMapProvider $provider)
    {
        $this->provider = $provider;
    }
    public function fetch(Location $location):Weather
    {
        return $this->provider->fetch($location);
    }
}