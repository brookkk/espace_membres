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
    




  public function getEnquete()
    {
        return $this->enquete;
    }

    public function setEnquete($enquete)
    {
        $this->enquete = $enquete;
    }


    
}

