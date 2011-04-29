<?php

namespace Immosquare\EstateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PropertyController extends Controller
{
    public function searchAction()
    {
        return $this->render('ImmosquareEstateBundle:Property:searchresults.html.twig');
    }
}
