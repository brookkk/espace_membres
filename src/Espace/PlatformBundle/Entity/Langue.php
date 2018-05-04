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





    public function getAnneeDebut()
    {
        return $this->anneeDebut;
    }

    public function setAnneeDebut($anneeDebut)
    {
        $this->anneeDebut = $anneeDebut;
    }


    


     public function getAnneeFin()
    {
        return $this->anneeFin;
    }

    public function setAnneeFin($anneeFin)
    {
        $this->anneeFin = $anneeFin;
    }

     public function getEntreprise()
    {
        return $this->entreprise;
    }

    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
    }


     public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }


     public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }

//////////////////

     public function getPosteOccupe()
    {
        return $this->posteOccupe;
    }

    public function setPosteOccupe($posteOccupe)
    {
        $this->posteOccupe = $posteOccupe;
    }


     public function getMissions()
    {
        return $this->missions;
    }

    public function setMissions($missions)
    {
        $this->missions = $missions;
    }


   


}

