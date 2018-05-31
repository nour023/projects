<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Graveur
 */
class Graveur
{
    /**
     * @var string
     */
    private $graveur;

    /**
     * @var integer
     */
    private $idGraveur;


    /**
     * Set graveur
     *
     * @param string $graveur
     * @return Graveur
     */
    public function setGraveur($graveur)
    {
        $this->graveur = $graveur;

        return $this;
    }

    /**
     * Get graveur
     *
     * @return string 
     */
    public function getGraveur()
    {
        return $this->graveur;
    }

    /**
     * Get idGraveur
     *
     * @return integer 
     */
    public function getIdGraveur()
    {
        return $this->idGraveur;
    }
}
