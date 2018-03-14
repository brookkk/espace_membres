<?php

namespace Espace\PlatformBundle\Entity;

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
     * @var \DateTime
     *
     * @ORM\Column(name="Ref_offre", type="date")
     */
    private $refOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_entreprise", type="string", length=255)
     */
    private $nomEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre_offre", type="string", length=255)
     */
    private $titreOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="Type_contrat", type="string", length=255)
     */
    private $typeContrat;

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
     * @var string
     *
     * @ORM\Column(name="Niveau_formation_p", type="string", length=255)
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
    private $dateDepublication;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville_e", type="string", length=255)
     */
    private $villeE;

    /**
     * @var string
     *
     * @ORM\Column(name="Domaine_competence", type="string", length=255)
     */
    private $domaineCompetence;

    /**
     * @var string
     *
     * @ORM\Column(name="Piece_jointe_offre", type="string", length=255)
     */
    private $pieceJointeOffre;

    /**
     * @var int
     *
     * @ORM\Column(name="CP_e", type="integer")
     */
    private $cPE;



//Date par défaut lors de la creation d'une new Offre
    public function __construct()
    {
        $this->dateDePublication = new \Datetime();
        $this->dateDepublication = new \Datetime();
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
     * Set cPE
     *
     * @param integer $cPE
     *
     * @return Offre
     */
    public function setCPE($cPE)
    {
        $this->cPE = $cPE;

        return $this;
    }

    /**
     * Get cPE
     *
     * @return int
     */
    public function getCPE()
    {
        return $this->cPE;
    }
}

