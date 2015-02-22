<?php

namespace MtBlogBundle\Entity\Blog;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MtBlogBundle\Entity\Blog\AnnonceRepository")
 */
class Annonce
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="text",nullable=true)
     */
    private $auteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAnnonce", type="datetime",nullable=true)
     */
    private $dateAnnonce;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecre", type="datetime",nullable=true)
     */
    private $datecre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datesup", type="datetime",nullable=true)
     */
    private $datesup;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datMaj", type="datetime",nullable=true)
     */
    private $datMaj;

    /**
     * @var string
     *
     * @ORM\Column(name="util", type="string", length=255,nullable=true)
     */
    private $util;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuAnnonces", type="text",nullable=true)
     */
    private $contenuAnnonces;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixAnnonce", type="integer",nullable=true)
     */
    private $prixAnnonce;

    /**
     * @var nbLigne
     *
     * @ORM\Column(name="nbLigne", type="integer",nullable=true)
     */
    private $nbLigne;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Annonce
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set dateAnnonce
     *
     * @param \DateTime $dateAnnonce
     * @return Annonce
     */
    public function setDateAnnonce($dateAnnonce)
    {
        $this->dateAnnonce = $dateAnnonce;

        return $this;
    }

    /**
     * Get dateAnnonce
     *
     * @return \DateTime 
     */
    public function getDateAnnonce()
    {
        return $this->dateAnnonce;
    }

    /**
     * Set datecre
     *
     * @param \DateTime $datecre
     * @return Annonce
     */
    public function setDatecre($datecre)
    {
        $this->datecre = $datecre;

        return $this;
    }

    /**
     * Get datecre
     *
     * @return \DateTime 
     */
    public function getDatecre()
    {
        return $this->datecre;
    }

    /**
     * Set datesup
     *
     * @param \DateTime $datesup
     * @return Annonce
     */
    public function setDatesup($datesup)
    {
        $this->datesup = $datesup;

        return $this;
    }

    /**
     * Get datesup
     *
     * @return \DateTime 
     */
    public function getDatesup()
    {
        return $this->datesup;
    }

    /**
     * Set datMaj
     *
     * @param \DateTime $datMaj
     * @return Annonce
     */
    public function setDatMaj($datMaj)
    {
        $this->datMaj = $datMaj;

        return $this;
    }

    /**
     * Get datMaj
     *
     * @return \DateTime 
     */
    public function getDatMaj()
    {
        return $this->datMaj;
    }

    /**
     * Set util
     *
     * @param string $util
     * @return Annonce
     */
    public function setUtil($util)
    {
        $this->util = $util;

        return $this;
    }

    /**
     * Get util
     *
     * @return string 
     */
    public function getUtil()
    {
        return $this->util;
    }

    /**
     * Set contenuAnnonces
     *
     * @param string $contenuAnnonces
     * @return Annonce
     */
    public function setContenuAnnonces($contenuAnnonces)
    {
        $this->contenuAnnonces = $contenuAnnonces;

        return $this;
    }

    /**
     * Get contenuAnnonces
     *
     * @return string 
     */
    public function getContenuAnnonces()
    {
        return $this->contenuAnnonces;
    }

    /**
     * Set prixAnnonce
     *
     * @param integer $prixAnnonce
     * @return Annonce
     */
    public function setPrixAnnonce($prixAnnonce)
    {
        $this->prixAnnonce = $prixAnnonce;

        return $this;
    }

    /**
     * Get prixAnnonce
     *
     * @return integer 
     */
    public function getPrixAnnonce()
    {
        return $this->prixAnnonce;
    }

    /**
     * Set nbLigne
     *
     * @param integer $nbLigne
     * @return Annonce
     */
    public function setNbLigne($nbLigne)
    {
        $this->nbLigne = $nbLigne;

        return $this;
    }

    /**
     * Get nbLigne
     *
     * @return integer 
     */
    public function getNbLigne()
    {
        return $this->nbLigne;
    }
}
