<?php
/**
 * Created by PhpStorm.
 * User: vilius
 * Date: 4/12/16
 * Time: 1:31 PM
 */
namespace Nfq\WeatherBundle\Provider;

use Nfq\WeatherBundle\Location\Location;
use Nfq\WeatherBundle\Weather\Weather;
use Nfq\WeatherBundle\Parser\OpenWeatherMapParser;

class OpenWeatherMapProvider {
    private $parser;
    public function __construct(OpenWeatherMapParser $parser)
    {
        $this->parser = $parser;
    }
    public function fetch(Location $location): Weather
    {
        $url = sprintf(
            'http://api.openweathermap.org/data/2.5/weather?lat=%d&lon=%d&appid=c324bd1ce398edfb28f3dd1465b9c3fd&units=metric',
            $location->getLatitude(),
            $location->getLongitude()
        );
        $data = file_get_contents($url);
        return $this->parser->parseJson($data);
    }
}