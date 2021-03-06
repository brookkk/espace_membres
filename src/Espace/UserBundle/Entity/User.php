<?php

namespace Espace\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Espace\UserBundle\Entity\Cv;



/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Espace\UserBundle\Repository\UserRepository")
  * @UniqueEntity(fields="email", message="Un utilisateur existe déjà avec cet email.")
 */
class User   implements UserInterface

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
   * @ORM\OneToOne(targetEntity="Espace\UserBundle\Entity\Cv", cascade={"persist"})
   */
  private $cv;
   



    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;


     /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
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
     * @ORM\Column(name="descriptionE", type="text", nullable=true)
     */
    private $descriptionE;


     /**
     * @var string
     *
     * @ORM\Column(name="adresseE", type="text", nullable=true)
     */
    private $adresseE;


     /**
     * @var string
     *
    * @Assert\Length(
     *      min = 5,
     *      max = 5,
     *      exactMessage = "Le code postal doit être composé de 5 chiffres",
     *      
     * )     
     * @ORM\Column(name="codePostalE", type="integer",  nullable=true)
     */
    private $codePostalE;


    /**
     * @var string
     *
     * @Assert\Blank()
    * @Assert\Length(
     *      min = 11,
     *      max = 11,
     *      exactMessage = "Le numéro INE doit être composé de 11 caractères",
     *      
     * )     
     * @ORM\Column(name="numIne", type="string",  nullable=true)
     */
    private $numIne;


     /**
     * @var string
     *
     * @ORM\Column(name="villeE", type="string", length=255, nullable=true)
     */
    private $villeE;




     /**
     * @ORM\Column(type="string", nullable = true)
     *
     * @Assert\File(mimeTypes={ "image/*" }, mimeTypesMessage="Merci de choisir le logo avec le bon format (image)")
     */
    private $logoE;



     /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;


     /**
     * @var string
     *
     * @ORM\Column(name="votreFonction", type="string", length=255, nullable=true)
     */
    private $votreFonction;


     /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;



    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    

      /**
     * @var string
     *
     *@Assert\Length(
     *      min = 5,
     *      max = 5,
     *      exactMessage = "Le code postal doit être composé de 5 chiffres",
     *      
     * )     
     * @ORM\Column(name="codePostal", type="integer", nullable=true)
     */
    private $codePostal;


        /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="boolean", nullable=false)
     */
    private $civilite;

       /**
     * @var string
     *
     * @ORM\Column(name="foundEntro", type="boolean", nullable=true)
     */
    private $foundEntro;


      /**
     * @var string
     *
     * @ORM\Column(name="serviceAccompagnement", type="boolean", nullable=true)
     */
    private $serviceAccompagnement;


       /**
     * @var string
     *
     * @ORM\Column(name="valide", type="boolean", nullable=false)
     */
    private $valide;


        /**
     * @var string
     *
     * @ORM\Column(name="newsletter", type="boolean", nullable=false)
     */
    private $newsletter;



       /**
     * @var string
     *
     * @ORM\Column(name="enquete", type="boolean", nullable=true)
     */
    private $enquete;


        /**
    * * @ORM\Column(name="ddn", type="date", nullable=true)
     *@Assert\Date()
     */
    private $ddn;

  

   

      /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainPassword;

    /**
     * The below length depends on the "algorithm" you use for encoding
     * the password, but this works well with bcrypt.
     *
     * @ORM\Column(name="password", type="string", length=64)
     */
    private $password;



     /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255, nullable=false)
     */
    private $telephone;


   


    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false, unique=true)
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


    /**        
   * @ORM\ManyToOne(targetEntity="Espace\PlatformBundle\Entity\Niveau_de_formation", cascade={"persist"})        
   * @ORM\JoinColumn(nullable=true)
   */       
    private $niveauFormation;   


     /**        
   * @ORM\OneToMany(targetEntity="Espace\PlatformBundle\Entity\Diplome", cascade={"persist"})        
   * @ORM\JoinColumn(nullable=true) 
   * @ORM\Column(name="diplome", type="array" )   
   */       
    private $diplome;   




      /**
     * @var string
     *
     * @ORM\Column(name="pcNom", type="string", length=255, nullable=true)
     */
    private $pcNom;


     /**
     * @var string
     *
     * @ORM\Column(name="pcPrenom", type="string", length=255, nullable=true)
     */
    private $pcPrenom;


    /**
     * @var string
     *
     * @ORM\Column(name="pcAdresse", type="string", length=255, nullable=true)
     */
    private $pcAdresse;


    /**
     * @var string
     *
     *@Assert\Length(
     *      min = 5,
     *      max = 5,
     *      exactMessage = "Le code postal doit être composé de 5 chiffres",
     *      
     * )     
     * @ORM\Column(name="pcCodePostal", type="integer", nullable=true)
     */
    private $pcCodePostal;



    /**
     * @var string
     *
     * @ORM\Column(name="pcVille", type="string", length=255, nullable=true)
     */
    private $pcVille;


    /**
     * @var string
     *
     * @ORM\Column(name="pcEmail", type="string", length=255, nullable=true)
     */
    private $pcEmail;



    /**
     * @var string
     *
     * @ORM\Column(name="pcTelephone", type="string", length=255, nullable=true)
     */
    private $pcTelephone;


     /**
     * @var string
     *
     * @ORM\Column(name="pcTelephonePortable", type="string", length=255, nullable=true)
     */
    private $pcTelephonePortable;


    /**
     * @var string
     *
     * @ORM\Column(name="pcLien", type="string", length=255, nullable=true)
     */
    private $pcLien;


      /**        
   * @ORM\ManyToOne(targetEntity="Espace\PlatformBundle\Entity\Secteur_d_activite")     
   * @ORM\JoinColumn(nullable=true)        
   */       
    private $secteurActivite; 

    /**     
     * Set Secteur_activite     
     *      
     * @param string $secteurActivite       
     *      
     * @return Offre        
     */     
    public function setSecteurActivite($secteurActivite)        
    {       
        $this->secteurActivite = $secteurActivite;      
        
        return $this;       
    }       
        
    /**     
     * Get Secteur_activite     
     *      
     * @return string       
     */     
    public function getSecteurActivite()        
    {       
        return $this->secteurActivite;      
    }   


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


        public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
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


        public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

        public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }


        public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }


        public function getDdn()
    {
        return $this->ddn;
    }

    public function setDdn($ddn)
    {
        $this->ddn = $ddn;
    }


    public function getNiveauFormation()
    {
        return $this->niveauFormation;
    }

    public function setNiveauFormation($niveauFormation)
    {
        $this->niveauFormation = $niveauFormation;
    }


    public function getDiplome()
    {
        return $this->diplome;
    }

    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;
    }


    public function getNewsletter()
    {
        return $this->newsletter;
    }

    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;
    }

    public function getValide()
    {
        return $this->valide;
    }

    public function setValide($valide)
    {
        $this->valide = $valide;
    }


     public function getLogoE()
    {
        return $this->logoE;
    }

    public function setLogoE($logoE)
    {
        $this->logoE = $logoE;
    }


    public function getNumIne()
    {
        return $this->numIne;
    }

    public function setNumIne($numIne)
    {
        $this->numIne = $numIne;
    }

    ///////////////////////////////////////////////////////////////////////

    public function getPcNom()
    {
        return $this->pcNom;
    }

    public function setPcNom($pcNom)
    {
        $this->pcNom = $pcNom;
    }





public function getPcPrenom()
    {
        return $this->pcPrenom;
    }

    public function setPcPrenom($pcPrenom)
    {
        $this->pcPrenom = $pcPrenom;
    }





    public function getPcAdresse()
    {
        return $this->pcAdresse;
    }

    public function setPcAdresse($pcAdresse)
    {
        $this->pcAdresse = $pcAdresse;
    }





    public function getPcCodePostal()
    {
        return $this->pcCodePostal;
    }

    public function setPcCodePostal($pcCodePostal)
    {
        $this->pcCodePostal = $pcCodePostal;
    }




    public function getPcVille()
    {
        return $this->pcVille;
    }

    public function setPcVille($pcVille)
    {
        $this->pcVille = $pcVille;
    }




    public function getPcEmail()
    {
        return $this->pcEmail;
    }

    public function setPcEmail($pcEmail)
    {
        $this->pcEmail = $pcEmail;
    }




    public function getPcTelephone()
    {
        return $this->pcTelephone;
    }

    public function setPcTelephone($pcTelephone)
    {
        $this->pcTelephone = $pcTelephone;
    }




    public function getPcTelephonePortable()
    {
        return $this->pcTelephonePortable;
    }

    public function setPcTelephonePortable($pcTelephonePortable)
    {
        $this->pcTelephonePortable = $pcTelephonePortable;
    }




    public function getPcLien()
    {
        return $this->pcLien;
    }

    public function setPcLien($pcLien)
    {
        $this->pcLien = $pcLien;
    }


      public function getEnquete()
    {
        return $this->enquete;
    }

    public function setEnquete($enquete)
    {
        $this->enquete = $enquete;
    }


      public function getFoundEntro()
    {
        return $this->foundEntro;
    }

    public function setFoundEntro($foundEntro)
    {
        $this->foundEntro = $foundEntro;
    }



      public function getServiceAccompagnement()
    {
        return $this->serviceAccompagnement;
    }

    public function setServiceAccompagnement($serviceAccompagnement)
    {
        $this->serviceAccompagnement = $serviceAccompagnement;
    }

/**
     * Get Cv
     *
     * @return Cv
     */
      public function getCv()
    {
        return $this->cv;
    }

    public function setCv(Cv $cv)
    {
        $this->cv = $cv;
    }
    
}

