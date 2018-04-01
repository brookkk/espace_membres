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
     * @ORM\Column(name="nomE", type="string", length=255)
     */
    private $nomE;

     /**
     * @var string
     *
     * @ORM\Column(name="descriptionE", type="text")
     */
    private $descriptionE;



     /**
     * @var string
     *
     * @ORM\Column(name="adresseE", type="text")
     */
    private $adresseE;






     /**
     * @var string
     *
     * @ORM\Column(name="codePostalE", type="string", length=255)
     */
    private $codePostalE;


     /**
     * @var string
     *
     * @ORM\Column(name="villeE", type="string", length=255)
     */
    private $villeE;


     /**
     * @var string
     *
     * @ORM\Column(name="votreFonction", type="string", length=255)
     */
    private $votreFonction;








    /**
     * Set adresseE
     *
     * @param string $adresseE
     *
     * @return User
     */
    public function setAdresseE($adresseE)
    {
        $this->adresseE = $adresseE;

        return $this;
    }

    /**
     * Get adresseE
     *
     * @return string
     */
    public function getAdresseE()
    {
        return $this->adresseE;
    }






/**
     * Set codePostalE
     *
     * @param string $codePostalE
     *
     * @return User
     */
    public function setCodePostalE($codePostalE)
    {
        $this->codePostalE = $codePostalE;

        return $this;
    }

    /**
     * Get codePostalE
     *
     * @return string
     */
    public function getCodePostalE()
    {
        return $this->codePostalE;
    }


    /**
     * Set villeE
     *
     * @param string $villeE
     *
     * @return User
     */
    public function setVilleE($villeE)
    {
        $this->villeE = $villeE;

        return $this;
    }

    /**
     * Get villeE
     *
     * @return string
     */
    public function getVilleE()
    {
        return $this->villeE;
    }





    /**
     * Set votreFonction
     *
     * @param string $votreFonction
     *
     * @return User
     */
    public function setVotreFonction($votreFonction)
    {
        $this->votreFonction = $votreFonction;

        return $this;
    }

    /**
     * Get votreFonction
     *
     * @return string
     */
    public function getVotreFonction()
    {
        return $this->votreFonction;
    }


    /**
     * Set nomE
     *
     * @param string $nomE
     *
     * @return User
     */
        public function setNomE($nomE)
    {
        $this->nomE = $nomE;

        return $this;
    }

    /**
     * Get nomE
     *
     * @return string
     */
    public function getNomE()
    {
        return $this->nomE;
    }




    /**
     * Set descriptionE
     *
     * @param string $descriptionE
     *
     * @return User
     */
        public function setDescriptionE($descriptionE)
    {
        $this->descriptionE = $descriptionE;

        return $this;
    }

    /**
     * Get descriptionE
     *
     * @return string
     */
    public function getDescriptionE()
    {
        return $this->descriptionE;
    }


    
}

