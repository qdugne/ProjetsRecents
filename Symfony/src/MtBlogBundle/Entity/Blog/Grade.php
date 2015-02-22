<?php

namespace MtBlogBundle\Entity\Blog;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grade
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MtBlogBundle\Entity\Blog\GradeRepository")
 */
class Grade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gra_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $gra_id;

    /**
     * @var string
     *
     * @ORM\Column(name="gra_lib", type="text")
     */
    private $gra_lib;

       /**
     * @var string
     *
     * @ORM\Column(name="gra_certifiant", type="text")
     */
    private $gra_certifiant;



    /**
     * Get gra_id
     *
     * @return integer 
     */
    public function getGraId()
    {
        return $this->gra_id;
    }

    /**
     * Set gra_lib
     *
     * @param string $graLib
     * @return Grade
     */
    public function setGraLib($graLib)
    {
        $this->gra_lib = $graLib;

        return $this;
    }

    /**
     * Get gra_lib
     *
     * @return string 
     */
    public function getGraLib()
    {
        return $this->gra_lib;
    }

    /**
     * Set gra_certifiant
     *
     * @param string $graCertifiant
     * @return Grade
     */
    public function setGraCertifiant($graCertifiant)
    {
        $this->gra_certifiant = $graCertifiant;

        return $this;
    }

    /**
     * Get gra_certifiant
     *
     * @return string 
     */
    public function getGraCertifiant()
    {
        return $this->gra_certifiant;
    }
}
