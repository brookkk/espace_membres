<?php

namespace Espace\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteur_d_activite
 *
 * @ORM\Table(name="secteur_d_activite")
 * @ORM\Entity(repositoryClass="Espace\PlatformBundle\Repository\Secteur_d_activiteRepository")
 */
class Secteur_d_activite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Secteur_d_activite
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}

