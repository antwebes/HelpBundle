<?php

namespace Ant\HelpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ShowController extends Controller
{
    public function stepperAction($template)
    {
    	if ( $this->get('templating')->exists('HelpBundle:Stepper:'.$template.'-stepper.html.twig') ) {
    		return $this->render('HelpBundle:Stepper:'.$template.'-stepper.html.twig');
    	}
    	throw $this->createNotFoundException('Page not found');
//     	try {
//     		$this->get('templating')->render('AcmeDemoBundle:Foo:bar.html.twig')
//     	} catch (\Exception $ex) {
//     		// your conditional code here.
//     	}
    }
}
