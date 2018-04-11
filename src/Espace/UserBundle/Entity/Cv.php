<?php

namespace Espace\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Espace\UserBundle\Entity\User;


/**
 * Cv
 *
 * @ORM\Table(name="cv")
 * @ORM\Entity(repositoryClass="Espace\UserBundle\Repository\CvRepository")
 */
class Cv 
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
   * @ORM\OneToOne(targetEntity="Espace\UserBundle\Entity\User", cascade={"persist"})
   */
  private $user;


/**
     * @var string
     *     
     * @ORM\Column(name="mobilite", type="integer",  nullable=true)
     */
    private $mobilite;



/**
     * @var string
     *     
     * @ORM\Column(name="experience", type="integer",  nullable=true)
     */
    private $experience;


    /**
     * @var string
     *     
     * @ORM\Column(name="profilTitre", type="string",  nullable=true)
     */
    private $profilTitre;



    /**     
   * @ORM\ManyToOne(targetEntity="Espace\PlatformBundle\Entity\Type_de_contrat")        
   * @ORM\JoinColumn(nullable=true)        
   */       
    private $typeContratRecherche;  
    




  public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }



      public function getUser()
    {
        return $this->user;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }



      public function getMobilite()
    {
        return $this->mobilite;
    }

    public function setMobilite($mobilite)
    {
        $this->mobilite = $mobilite;
    }


     public function getProfilTitre()
    {
        return $this->profilTitre;
    }

    public function setProfilTitre($profilTitre)
    {
        $this->profilTitre = $profilTitre;
    }




   
    public function setTypeContratRecherche($typeContratRecherche)        
    {       
        $this->typeContratRecherche = $typeContratRecherche;      
        
        return $this;       
    }       
        
 
    public function getTypeContratRecherche()        
    {       
        return $this->typeContratRecherche;      
    } 


     public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }


    
}

