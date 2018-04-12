<?php

namespace Espace\PlatformBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="Espace\PlatformBundle\Repository\TaskRepository")
 */
class Task
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
     * @ORM\Column(name="description", type="string",  nullable=true)
     */
    protected $description;



 /**        
  * @ORM\ManyToMany(targetEntity="Espace\PlatformBundle\Entity\Tag", cascade={"persist"})

    
   */

    private $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getTags()
    {
        return $this->tags;
    }


    public function addTag(Tag $tag)
{
    $this->tags[] = $tag;
}

public function removeTag(Tag $tag)
{
    $this->tags->removeElement($tag);
}



}

