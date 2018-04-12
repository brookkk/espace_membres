<?php

namespace Espace\PlatformBundle\Entity;

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
     * @ORM\Column(name="name", type="string",  nullable=true)
     */
    private $name;




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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


}

