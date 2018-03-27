<?php

namespace Espace\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * Entreprise
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Espace\UserBundle\Repository\EtudiantRepository")
 */
class Entreprise extends User
{
    
}

