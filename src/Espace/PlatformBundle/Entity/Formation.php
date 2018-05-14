<?php

namespace Espace\PlatformBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Langue
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="Espace\PlatformBundle\Repository\FormationRepository")
 */
class Formation
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
     * @ORM\Column(name="langue", type="integer", length=255)       
     */     
    private $annee;  



 


         /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string",  nullable=true)
     */
    private $formation;    



         /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string",  nullable=true)
     */
    private $etablissement;   


       /**
     * @var string
     *
    * @Assert\Length(
     *      min = 5,
     *      max = 5,
     *      exactMessage = "Le code postal doit être composé de 5 chiffres",
     *      
     * )     
     * @ORM\Column(name="codePostal", type="integer",  nullable=true)
     */
    private $codePostal;    


         /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string",  nullable=true)
     */
    private $ville;   



  
       public function getId()
    {
        return $this->id;
    }



 


     public function getLogiciel()
    {
        return $this->logiciel;
    }

    public function setLogiciel($logiciel)
    {
        $this->logiciel = $logiciel;
    }


   public function getNiveau()
    {
        return $this->niveau;
    }

    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

  
   


}

