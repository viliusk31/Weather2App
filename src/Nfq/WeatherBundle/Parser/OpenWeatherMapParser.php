<?php
/**
 * Created by PhpStorm.
 * User: vilius
 * Date: 4/12/16
 * Time: 2:42 PM
 */
namespace Nfq\WeatherBundle\Parser;

use Nfq\WeatherBundle\Exception\WeatherProviderException;
use Nfq\WeatherBundle\Weather\Weather;

class OpenWeatherMapParser implements ParserInterface
{
    public function parseJson($json): Weather
    {
        $parsed_json = json_decode($json);
        if (!isset($parsed_json->main->temp))
        {
            throw new WeatherProviderException('Unable to get temperature from openweathermap');
        }
        $weather = new Weather($parsed_json->main->temp);
        return $weather;
    }
}