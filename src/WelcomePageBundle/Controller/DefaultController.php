<?php

namespace WelcomePageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WelcomePageBundle:Default:index.html.twig');
    }
}
