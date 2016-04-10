<?php

namespace Entreprise\EntrepriseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class statistiqueController extends Controller
{
    public function statistiqueAction()
    {
        return $this->render('EntrepriseBundle:ModuleEntreprise:statistique.html.twig');
    }
}
