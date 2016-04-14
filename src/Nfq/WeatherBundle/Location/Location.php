<?php

/**
 * Created by PhpStorm.
 * User: vilius
 * Date: 4/12/16
 * Time: 12:52 PM
 */

namespace Nfq\WeatherBundle\Location;

class Location
{
    private $latitude;
    private $longitude;
    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
    public function getLatitude()
    {
        return $this->latitude;
    }
    public function getLongitude()
    {
        return $this->longitude;
    }

}