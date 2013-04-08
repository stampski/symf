<?php

namespace Acme\StampBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeStampBundle:Default:index.html.twig', array('name' => $name));
    }
}
