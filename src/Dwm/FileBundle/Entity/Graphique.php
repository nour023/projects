<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Graphique
 */
class Graphique
{
    /**
     * @var string
     */
    private $graphique;

    /**
     * @var integer
     */
    private $idGraphique;


    /**
     * Set graphique
     *
     * @param string $graphique
     * @return Graphique
     */
    public function setGraphique($graphique)
    {
        $this->graphique = $graphique;

        return $this;
    }

    /**
     * Get graphique
     *
     * @return string 
     */
    public function getGraphique()
    {
        return $this->graphique;
    }

    /**
     * Get idGraphique
     *
     * @return integer 
     */
    public function getIdGraphique()
    {
        return $this->idGraphique;
    }
}
