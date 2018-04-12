<?php

namespace Espace\PlatformBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau_de_formation
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="Espace\PlatformBundle\Repository\TaskRepository")
 */
class Task
{
   

    protected $description;

    protected $tags;

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



}

