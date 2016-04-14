<?php

namespace Nfq\WeatherBundle\Controller;

use Nfq\WeatherBundle\Location\Location;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $location = new Location(35,139);
        $provider = $this->get('nfq.weather');
        $weather = $provider->fetch($location);
        return $this->render('WeatherBundle:Default:index.html.twig', array('weather' => $weather));
    }
}