<?php

namespace Espace\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * Etudiant
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Espace\UserBundle\Repository\EtudiantRepository")
 */
class Etudiant extends User
{
    
}

