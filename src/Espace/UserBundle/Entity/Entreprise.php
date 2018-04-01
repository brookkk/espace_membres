<?php

namespace Espace\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Espace\UserBundle\Entity\User;



/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise")
 * @ORM\Entity(repositoryClass="Espace\UserBundle\Repository\EntrepriseRepository")
 */
class Entreprise extends User
{
      /**
     * @var string
     *
     * @ORM\Column(name="nomE", type="string", length=255, nullable=false)
     */
    private $nomE;
}

