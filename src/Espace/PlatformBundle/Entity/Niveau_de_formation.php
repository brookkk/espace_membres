<?php

namespace Espace\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau_de_formation
 *
 * @ORM\Table(name="niveau_de_formation")
 * @ORM\Entity(repositoryClass="Espace\PlatformBundle\Repository\Niveau_de_formationRepository")
 */
class Niveau_de_formation
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=true, unique=true)
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
     * @return Niveau_de_formation
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

