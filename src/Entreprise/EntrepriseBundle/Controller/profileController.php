<?php

namespace Entreprise\EntrepriseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class profileController extends Controller
{
    public function profileAction()
    {
        return $this->render('EntrepriseBundle:ModuleUser:profileUser.html.twig');
    }
}
