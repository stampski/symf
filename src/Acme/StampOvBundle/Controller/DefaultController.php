<?php

namespace Acme\StampOvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeStampOvBundle:Default:index.html.twig', array('name' => $name));
    }
}
