<?php

namespace Nfq\WeatherBundle\Provider;

use Nfq\WeatherBundle\Location\Location;
use Nfq\WeatherBundle\Weather\Weather;

interface WeatherProviderInterface
{
    public function fetch(Location $location):Weather;
}