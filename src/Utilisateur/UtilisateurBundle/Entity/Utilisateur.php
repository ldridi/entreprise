<?php
// src/AppBundle/Entity/User.php

namespace Utilisateur\UtilisateurBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class Utilisateur extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @var boolean $isEntreprise
     *
     * @ORM\Column(name="isEntreprise", type="boolean")
     */
    private $isEntreprise;

    /**
     * Set isEntreprise
     *
     * @param boolean $isEntreprise
     * @return Utilisateur
     */
    public function setIsEntreprise($isEntreprise)
    {
        $this->isEntreprise = $isEntreprise;

        return $this;
    }

    /**
     * Get isEntreprise
     *
     * @return boolean 
     */
    public function getIsEntreprise()
    {
        return $this->isEntreprise;
    }
}
