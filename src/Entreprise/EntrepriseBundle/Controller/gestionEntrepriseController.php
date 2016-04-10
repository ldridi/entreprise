<?php

namespace Entreprise\EntrepriseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class gestionEntrepriseController extends Controller
{
    public function gestionEntrepriseAction()
    {
        return $this->render('EntrepriseBundle:ModuleEntreprise:gestionEntreprise.html.twig');
    }
}
