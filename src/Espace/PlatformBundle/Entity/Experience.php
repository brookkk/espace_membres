<?php

namespace Espace\PlatformBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity(repositoryClass="Espace\PlatformBundle\Repository\ExperienceRepository")
 */
class Experience
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
     * @ORM\Column(name="anneeDebut", type="integer")       
     */     
    private $anneeDebut;   



    /**     
     * @var string      
     *      
     * @ORM\Column(name="anneeFin", type="integer")       
     */     
    private $anneeFin; 




    /**     
     * @var string      
     *      
     * @ORM\Column(name="entreprise", type="string", length=255)       
     */     
    private $entreprise;  



    /**     
     * @var string      
     *      
     * @ORM\Column(name="ville", type="string", length=255)       
     */     
    private $ville;  



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
     * @ORM\Column(name="posteOccupe", type="string", length=255)       
     */     
    private $posteOccupe; 


    /**     
     * @var string      
     *      
     * @ORM\Column(name="missions", type="text")       
     */     
    private $missions;   





    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    //////////////////


     public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


     public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


     public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


     public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


     public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


     public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


     public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


}

