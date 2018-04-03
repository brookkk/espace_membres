<?php

      
        
namespace Espace\PlatformBundle\Entity;     

use Symfony\Component\Validator\Constraints as Assert;
use Espace\UserBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;


        
use Doctrine\ORM\Mapping as ORM;        
        
/**     
 * Offre        
 *      
 * @ORM\Table(name="offre")     
 * @ORM\Entity(repositoryClass="Espace\PlatformBundle\Repository\OffreRepository")      
 */     
class Offre     
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
   * @ORM\ManyToMany(targetEntity="Espace\UserBundle\Entity\User", cascade={"persist"})
   */
  private $Users;   
        
    /**     
     * @var \DateTime       
     *      
     * @ORM\Column(name="Ref_offre", type="date", nullable=true)       
     */     
    private $refOffre;      
        
    /**     
     * @var string      
     *      
     * @ORM\Column(name="Nom_entreprise", type="string", length=255, nullable=true)        
     */     
    private $nomEntreprise;     
        
    /**     
     * @var string      
     *      
     * @ORM\Column(name="Titre_offre", type="string", length=255)       
     */     
    private $titreOffre;        
        
        
     /**     
   * @ORM\ManyToOne(targetEntity="Espace\UserBundle\Entity\User")        
   * @ORM\JoinColumn(nullable=true)        
   */       
    private $entreprise; 
    
        
        
    /**     
   * @ORM\ManyToOne(targetEntity="Espace\PlatformBundle\Entity\Type_de_contrat")        
   * @ORM\JoinColumn(nullable=false)        
   */       
    private $typeContrat;       
        
     /**        
   * @ORM\ManyToOne(targetEntity="Espace\PlatformBundle\Entity\Secteur_d_activite")     
   * @ORM\JoinColumn(nullable=true)        
   */       
    private $secteurActivite;       
        
    /**     
     * @var string      
     *      
     * @ORM\Column(name="Desc_offre", type="text")      
     */     
    private $descOffre;     
        
    /**     
     * @var string      
     *      
     * @ORM\Column(name="Duree_contrat", type="string", length=255)     
     */     
    private $dureeContrat;      
        
        
        
        
        
        
        
 /**        
   * @ORM\ManyToOne(targetEntity="Espace\PlatformBundle\Entity\Niveau_de_formation")        
   * @ORM\JoinColumn(nullable=false)        
   */       
    private $niveauFormationP;      
        
        
        
        
        
        
        
    /**     
     * @var \DateTime       
     *      
     * @ORM\Column(name="Date_de_publication", type="datetime")     
     */     
    private $dateDePublication;     
        
    /**     
     * @var \DateTime       
     *      
     * @ORM\Column(name="Date_depublication", type="datetime")      
     */     
    private $dateDeduplication;     
        
    /**     
     * @var string      
     *      
     * @ORM\Column(name="Ville_e", type="string", length=255)       
     */     
    private $villeE;        
        
   


    /**        
   * @ORM\ManyToOne(targetEntity="Espace\PlatformBundle\Entity\Domaine_de_competence")        
   * @ORM\JoinColumn(nullable=false)        
   */       
    private $domaineCompetence;   
        
    /**     
     * @var string      
     *      
     * @ORM\Column(name="Piece_jointe_offre", type="string", length=255)        
     */     
    private $pieceJointeOffre;      
        
   


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
        
        
        
//Date par défaut lors de la creation d'une new Offre       
    public function __construct()       
    {       
       // $this->dateDePublication = new \Datetime();     
       // $this->dateDeduplication = new \Datetime();     

        $this->users = new ArrayCollection();
    }       



  public function addUser(User $user)
  {
    $this->users[] = $user;

    return $this;
  }

  public function removeUser(User $user)
  {
    $this->users->removeElement($user);
  }

  public function getUsers()
  {
    return $this->users;
  }
        
        
    /**     
     * Get id       
     *      
     * @return int      
     */     
    public function getId()     
    {       
        return $this->id;       
    }       
        
    /**     
     * Set refOffre     
     *      
     * @param \DateTime $refOffre       
     *      
     * @return Offre        
     */     
    public function setRefOffre($refOffre)      
    {       
        $this->refOffre = $refOffre;        
        
        return $this;       
    }       
        
    /**     
     * Get refOffre     
     *      
     * @return \DateTime        
     */     
    public function getRefOffre()       
    {       
        return $this->refOffre;     
    }       
        
    /**     
     * Set nomEntreprise        
     *      
     * @param string $nomEntreprise     
     *      
     * @return Offre        
     */     
    public function setNomEntreprise($nomEntreprise)        
    {       
        $this->nomEntreprise = $nomEntreprise;      
        
        return $this;       
    }       
        
    /**     
     * Get nomEntreprise        
     *      
     * @return string       
     */     
    public function getNomEntreprise()      
    {       
        return $this->nomEntreprise;        
    }       
        
    /**     
     * Set titreOffre       
     *      
     * @param string $titreOffre        
     *      
     * @return Offre        
     */     
    public function setTitreOffre($titreOffre)      
    {       
        $this->titreOffre = $titreOffre;        
        
        return $this;       
    }       
        
    /**     
     * Get titreOffre       
     *      
     * @return string       
     */     
    public function getTitreOffre()     
    {       
        return $this->titreOffre;       
    }       
        
    /**     
     * Set typeContrat      
     *      
     * @param string $typeContrat       
     *      
     * @return Offre        
     */     
    public function setTypeContrat($typeContrat)        
    {       
        $this->typeContrat = $typeContrat;      
        
        return $this;       
    }       
        
    /**     
     * Get typeContrat      
     *      
     * @return string       
     */     
    public function getTypeContrat()        
    {       
        return $this->typeContrat;      
    }       
        
        
        
        
/**     
     * Set Secteur_activite     
     *      
     * @param string $secteurActivite       
     *      
     * @return Offre        
     */     
    public function setSecteurActivite($secteurActivite)        
    {       
        $this->secteurActivite = $secteurActivite;      
        
        return $this;       
    }       
        
    /**     
     * Get Secteur_activite     
     *      
     * @return string       
     */     
    public function getSecteurActivite()        
    {       
        return $this->secteurActivite;      
    }       
        
        
    /**     
     * Set descOffre        
     *      
     * @param string $descOffre     
     *      
     * @return Offre        
     */     
    public function setDescOffre($descOffre)        
    {       
        $this->descOffre = $descOffre;      
        
        return $this;       
    }       
        
    /**     
     * Get descOffre        
     *      
     * @return string       
     */     
    public function getDescOffre()      
    {       
        return $this->descOffre;        
    }       
        
    /**     
     * Set dureeContrat     
     *      
     * @param string $dureeContrat      
     *      
     * @return Offre        
     */     
    public function setDureeContrat($dureeContrat)      
    {       
        $this->dureeContrat = $dureeContrat;        
        
        return $this;       
    }       
        
    /**     
     * Get dureeContrat     
     *      
     * @return string       
     */     
    public function getDureeContrat()       
    {       
        return $this->dureeContrat;     
    }       
        
    /**     
     * Set niveauFormationP     
     *      
     * @param string $niveauFormationP      
     *      
     * @return Offre        
     */     
    public function setNiveauFormationP($niveauFormationP)      
    {       
        $this->niveauFormationP = $niveauFormationP;        
        
        return $this;       
    }       
        
    /**     
     * Get niveauFormationP     
     *      
     * @return string       
     */     
    public function getNiveauFormationP()       
    {       
        return $this->niveauFormationP;     
    }       
        
    /**     
     * Set dateDePublication        
     *      
     * @param \DateTime $dateDePublication      
     *      
     * @return Offre        
     */     
    public function setDateDePublication($dateDePublication)        
    {       
        $this->dateDePublication = $dateDePublication;      
        
        return $this;       
    }       
        
    /**     
     * Get dateDePublication        
     *      
     * @return \DateTime        
     */     
    public function getDateDePublication()      
    {       
        return $this->dateDePublication;        
    }       


    /**     
     * Set dateDeduplication        
     *      
     * @param \DateTime $dateDeduplication      
     *      
     * @return Offre        
     */     
    public function setDateDeduplication($dateDeduplication)        
    {       
        $this->dateDeduplication = $dateDeduplication;      
        
        return $this;       
    }       
        
    /**     
     * Get dateDeduplication        
     *      
     * @return \DateTime        
     */     
    public function getDateDeduplication()      
    {       
        return $this->dateDeduplication;        
    }       
        
        
    /**     
     * Set villeE       
     *      
     * @param string $villeE        
     *      
     * @return Offre        
     */     
    public function setVilleE($villeE)      
    {       
        $this->villeE = $villeE;        
        
        return $this;       
    }       
        
    /**     
     * Get villeE       
     *      
     * @return string       
     */     
    public function getVilleE()     
    {       
        return $this->villeE;       
    }       
        
    /**     
     * Set domaineCompetence        
     *      
     * @param string $domaineCompetence     
     *      
     * @return Offre        
     */     
    public function setDomaineCompetence($domaineCompetence)        
    {       
        $this->domaineCompetence = $domaineCompetence;      
        
        return $this;       
    }       
        
    /**     
     * Get domaineCompetence        
     *      
     * @return string       
     */     
    public function getDomaineCompetence()      
    {       
        return $this->domaineCompetence;        
    }       
        
    /**     
     * Set pieceJointeOffre     
     *      
     * @param string $pieceJointeOffre      
     *      
     * @return Offre        
     */     
    public function setPieceJointeOffre($pieceJointeOffre)      
    {       
        $this->pieceJointeOffre = $pieceJointeOffre;        
        
        return $this;       
    }       
        
    /**     
     * Get pieceJointeOffre     
     *      
     * @return string       
     */     
    public function getPieceJointeOffre()       
    {       
        return $this->pieceJointeOffre;     
    }       
        
    /**     
     * Set codePostal      
     *      
     * @param integer $codePostal      
     *      
     * @return Offre        
     */     
    public function setCodePostal($codePostal)        
    {       
        $this->codePostal = $codePostal;      
        
        return $this;       
    }       
        
    /**     
     * Get codePostal      
     *      
     * @return int      
     */     
    public function getCodePostal()        
    {       
        return $this->codePostal;      
    }       



    public function setEntreprise($entreprise)        
    {       
        $this->entreprise = $entreprise;      
        
        return $this;       
    }       
        
      
    public function getEntreprise()        
    {       
        return $this->entreprise;      
    }  


    public function addEntreprise(User $entreprise)
  {
    $this->entreprise[] = $entreprise;
  }
}       
