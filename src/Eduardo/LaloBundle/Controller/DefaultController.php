<?php

namespace Eduardo\LaloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LaloBundle:Default:index.html.twig');
    }
}
