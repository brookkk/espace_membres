<?php

namespace Espace\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Espace\UserBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Espace\PlatformBundle\Entity\Experience;
use Symfony\Component\Validator\Constraints as Assert;
use Espace\PlatformBundle\Entity\Langue;


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
  * @ORM\ManyToMany(targetEntity="Espace\PlatformBundle\Entity\Experience", cascade={"persist"})
   */

    private $experiences;



     /**        
  * @ORM\ManyToMany(targetEntity="Espace\PlatformBundle\Entity\Langue", cascade={"persist"})
   */

    private $langues;


  


/**
     * @var string
     *     
     * @ORM\Column(name="mobilite", type="integer",  nullable=true)
     */
    private $mobilite;


    /**
     * @var string
     *     
     * @ORM\Column(name="facebookLink", type="string",  nullable=true)
     */
    private $facebookLink;



    /**
     * @var string
     *     
     * @ORM\Column(name="linkedinLink", type="string",  nullable=true)
     */
    private $linkedinLink;



    /**
     * @var string
     *     
     * @ORM\Column(name="viadeoLink", type="string",  nullable=true)
     */
    private $viadeoLink;



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
   * @ORM\ManyToOne(targetEntity="Espace\PlatformBundle\Entity\Type_de_contrat" , cascade={"persist"})        
   * @ORM\JoinColumn(nullable=true)        
   */       
    private $typeContratRecherche;  




 


     /**
     * @ORM\Column(type="string", nullable = true)
     *
     * @Assert\File(mimeTypes={ "application/pdf", "application/msword" , "application/vnd.openxmlformats-officedocument.wordprocessingml.document"}, mimeTypesMessage="Merci de choisir votre Cv avec le bon format (PDF ou bien Word)")
     */
    private $cvFile;




     /**        
   * @ORM\ManyToMany(targetEntity="Espace\PlatformBundle\Entity\Domaine_de_competence",  cascade={"persist"})        
   * @ORM\JoinColumn(nullable=true) 
   *   
   */       
    private $domaineCompetence;    
    
public function __construct()       
    {       
            

        //$this->domaineCompetences = new ArrayCollection();
    }   



  public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


/*
      public function getUser()
    {
        return $this->user;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }
*/


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



     public function getFacebookLink()
    {
        return $this->facebookLink;
    }

    public function setFacebookLink($facebookLink)
    {
        $this->facebookLink = $facebookLink;
    }



     public function getLinkedinLink()
    {
        return $this->linkedinLink;
    }

    public function setLinkedinLink($linkedinLink)
    {
        $this->linkedinLink = $linkedinLink;
    }



     public function getViadeoLink()
    {
        return $this->viadeoLink;
    }

    public function setViadeoLink($viadeoLink)
    {
        $this->viadeoLink = $viadeoLink;
    }



     public function getCvFile()
    {
        return $this->cvFile;
    }

    public function setCvFile($cvFile)
    {
        $this->cvFile = $cvFile;
    }




   
    public function setDomaineCompetence($domaineCompetence)        
    {       
        $this->domaineCompetence = $domaineCompetence;      
        
        return $this;       
    }       
        
    
    public function getDomaineCompetence()      
    {       
        return $this->domaineCompetence;        
    }

 /*      public function addDomaineCompetence(Experience $domaineCompetence)
{
    $this->domaineCompetences[] = $domaineCompetence;
}*/




     public function getExperiences()
    {
        return $this->experiences;
    }


    public function addExperience(Experience $experience)
{
    $this->experiences[] = $experience;
}

public function removeExperience(Experience $experience)
{
    $this->experiences->removeElement($experience);
}



  public function getLangues()
    {
        return $this->langues;
    }


    public function addLangue(Langue $langue)
        {
            $this->langues[] = $langue;
        }

      /*  public function setLangue($langue)
    {
        $this->langues = $langue;
    }*/

public function removeLangue(Langue $langue)
        {
            $this->langues->removeElement($langue);
        }
    
}

