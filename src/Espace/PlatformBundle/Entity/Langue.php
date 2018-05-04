<?php

namespace Espace\PlatformBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Langue
 *
 * @ORM\Table(name="langue")
 * @ORM\Entity(repositoryClass="Espace\PlatformBundle\Repository\LangueRepository")
 */
class Langue
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
     * @ORM\Column(name="langue", type="string", length=255)       
     */     
    private $langue;  



 


         /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="integer",  nullable=true)
     */
    private $niveau;    



  
       public function getId()
    {
        return $this->id;
    }



 


     public function getLangue()
    {
        return $this->langue;
    }

    public function setLangue($langue)
    {
        $this->langue = $langue;
    }


   public function getLangue()
    {
        return $this->langue;
    }

    public function setLangue($langue)
    {
        $this->langue = $langue;
    }

  
   


}

