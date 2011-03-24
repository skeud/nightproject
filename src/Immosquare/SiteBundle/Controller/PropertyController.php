<?php

namespace Immosquare\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Immosquare\SiteBundle\Document\Property;

class PropertyController extends Controller
{
    public function indexAction()
    {
      return new Response('<html><body>Hello!</body></html>');
    }

    public function createAction()
    {
        $property = new Property();
        $property->setName('Thomas Botton');
        $property->setPhone('0789198673');

        $dm = $this->get('doctrine.odm.mongodb.document_manager');
        $dm->persist($property);
        $dm->flush();
    }
}