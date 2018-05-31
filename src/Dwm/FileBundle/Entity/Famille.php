<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famille
 */
class Famille
{
    /**
     * @var string
     */
    private $libFamille;

    /**
     * @var integer
     */
    private $idFamille;


    /**
     * Set libFamille
     *
     * @param string $libFamille
     * @return Famille
     */
    public function setLibFamille($libFamille)
    {
        $this->libFamille = $libFamille;

        return $this;
    }

    /**
     * Get libFamille
     *
     * @return string 
     */
    public function getLibFamille()
    {
        return $this->libFamille;
    }

    /**
     * Get idFamille
     *
     * @return integer 
     */
    public function getIdFamille()
    {
        return $this->idFamille;
    }
}
