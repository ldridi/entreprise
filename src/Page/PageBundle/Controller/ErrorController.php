<?php

namespace Page\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ErrorController extends Controller
{

    public function erreur403Action()
    {
        return $this->render('PageBundle:Error:403.html.twig');
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
