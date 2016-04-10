<?php

namespace Entreprise\EntrepriseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class soutraitanceController extends Controller
{
    public function soutraitanceAction()
    {
        return $this->render('EntrepriseBundle:ModuleEntreprise:soutraitance.html.twig');
    }
}
