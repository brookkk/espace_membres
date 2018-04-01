<?php

namespace Espace\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Espace\UserBundle\Repository\UserRepository")
 */
class User implements UserInterface
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
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;


     /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


      /**
     * @var string
     *
     * @ORM\Column(name="nomE", type="string", length=255, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    


        /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="boolean")
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;



     /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;


   


    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array")
     */
    private $roles = array();

    /**
     * @var string
     *
     * @ORM\Column(name="profil", type="string", length=255)
     */
    private $profil;


      public function eraseCredentials()
  {
  }

public function  __construct()
{
    $this->roles = array('ROLEENTREPRISE');
}

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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
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



    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
        public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }



     /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return User
     */
        public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }


        public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set profil
     *
     * @param string $profil
     *
     * @return User
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return string
     */
    public function getProfil()
    {
        return $this->profil;
    }


        public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}

