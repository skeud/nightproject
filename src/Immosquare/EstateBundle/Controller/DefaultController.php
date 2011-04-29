<?php

namespace Immosquare\EstateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImmosquareEstateBundle:Default:index.html.twig');
    }
}
