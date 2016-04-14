<?php

namespace Nfq\WeatherBundle\Parser;

use Nfq\WeatherBundle\Weather\Weather;

interface ParserInterface
{
    public function parseJson($json): Weather;
}