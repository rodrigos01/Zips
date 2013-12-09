<?php

namespace Zips\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZipsMainBundle:Default:index.html.twig');
    }
}
