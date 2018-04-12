<?php

namespace Espace\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity(repositoryClass="Espace\PlatformBundle\Repository\TagRepository")
 */
class Tag
{
   

    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


}

