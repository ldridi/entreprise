<?php

namespace Entreprise\EntrepriseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class contactsController extends Controller
{
    public function contactsAction()
    {
        return $this->render('EntrepriseBundle:ModuleEntreprise:mesContacts.html.twig');
    }
}
