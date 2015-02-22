<?php

namespace MtBlogBundle\Entity\Blog;

use Doctrine\ORM\Mapping as ORM;

/**
 * Censor
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MtBlogBundle\Entity\Blog\CensorRepository")
 */
class Censor
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
     * @var integer
     *
     * @ORM\Column(name="Cen_num", type="integer")
     */
    private $cenNum;

    /**
     * @var string
     *
     * @ORM\Column(name="Cen_Nom", type="string", length=255)
     */
    private $cenNom;

    /**
     * @var string
     *
     * @ORM\Column(name="Cen_Prenom", type="string", length=255)
     */
    private $cenPrenom;

    /**
     * @var integer
     *
     * @ORM\Column(name="gra_id", type="integer")
     */
    private $graId;


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
     * Set cenNum
     *
     * @param integer $cenNum
     * @return Censor
     */
    public function setCenNum($cenNum)
    {
        $this->cenNum = $cenNum;

        return $this;
    }

    /**
     * Get cenNum
     *
     * @return integer 
     */
    public function getCenNum()
    {
        return $this->cenNum;
    }

    /**
     * Set cenNom
     *
     * @param string $cenNom
     * @return Censor
     */
    public function setCenNom($cenNom)
    {
        $this->cenNom = $cenNom;

        return $this;
    }

    /**
     * Get cenNom
     *
     * @return string 
     */
    public function getCenNom()
    {
        return $this->cenNom;
    }

    /**
     * Set cenPrenom
     *
     * @param string $cenPrenom
     * @return Censor
     */
    public function setCenPrenom($cenPrenom)
    {
        $this->cenPrenom = $cenPrenom;

        return $this;
    }

    /**
     * Get cenPrenom
     *
     * @return string 
     */
    public function getCenPrenom()
    {
        return $this->cenPrenom;
    }

    /**
     * Set graId
     *
     * @param integer $graId
     * @return Censor
     */
    public function setGraId($graId)
    {
        $this->graId = $graId;

        return $this;
    }

    /**
     * Get graId
     *
     * @return integer 
     */
    public function getGraId()
    {
        return $this->graId;
    }
}
