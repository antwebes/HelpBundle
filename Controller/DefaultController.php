<?php

namespace Ant\HelpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HelpBundle:Default:index.html.twig', array('name' => $name));
    }
}
