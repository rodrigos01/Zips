<?php

namespace Zips\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZipsMainBundle:Default:index.html.twig', array("pageTitle"=>"Início", "zipList"=>array()));
    }
    
    public function abertosAction()
    {
        return $this->render('ZipsMainBundle:Default:index.html.twig', array("pageTitle"=>"Abertos", "zipList"=>array()));
    }
    
    public function finalizadosAction()
    {
        return $this->render('ZipsMainBundle:Default:index.html.twig', array("pageTitle"=>"Finalizados", "zipList"=>array()));
    }
    
    public function meusZipsAction()
    {
        return $this->render('ZipsMainBundle:Default:index.html.twig', array("pageTitle"=>"Meus Zips", "zipList"=>array()));
    }
    
    public function configuracoesAction()
    {
        return $this->render('ZipsMainBundle:Default:config.html.twig');
    }
    
    public function logoutAction()
    {
        
    }
    
}
