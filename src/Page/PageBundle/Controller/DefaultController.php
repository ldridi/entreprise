<?php

namespace Page\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PageBundle:Default:index.html.twig');
    }

    public function erreur404Action()
    {
        return $this->render('PageBundle:Error:404.html.twig');
    }

    public function erreur500Action()
    {
        return $this->render('PageBundle:Error:500.html.twig');
    }
}
