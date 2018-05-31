<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousFamille
 */
class SousFamille
{
    /**
     * @var string
     */
    private $libSfam;

    /**
     * @var integer
     */
    private $idSfam;

    /**
     * @var \FileBundle\Entity\Famille
     */
    private $idFam;


    /**
     * Set libSfam
     *
     * @param string $libSfam
     * @return SousFamille
     */
    public function setLibSfam($libSfam)
    {
        $this->libSfam = $libSfam;

        return $this;
    }

    /**
     * Get libSfam
     *
     * @return string 
     */
    public function getLibSfam()
    {
        return $this->libSfam;
    }

    /**
     * Get idSfam
     *
     * @return integer 
     */
    public function getIdSfam()
    {
        return $this->idSfam;
    }

    /**
     * Set idFam
     *
     * @param \FileBundle\Entity\Famille $idFam
     * @return SousFamille
     */
    public function setIdFam(\FileBundle\Entity\Famille $idFam = null)
    {
        $this->idFam = $idFam;

        return $this;
    }

    /**
     * Get idFam
     *
     * @return \FileBundle\Entity\Famille 
     */
    public function getIdFam()
    {
        return $this->idFam;
    }
}
