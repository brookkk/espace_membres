<?php

namespace Espace\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * Alumni
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Espace\UserBundle\Repository\EtudiantRepository")
 */
class Alumni extends User
{
    
}

