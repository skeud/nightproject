<?php

namespace Immosquare\EstateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImmosquareEstateBundle:Welcome:index.html.twig');
    }
}
