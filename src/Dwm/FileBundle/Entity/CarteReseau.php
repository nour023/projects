<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarteReseau
 */
class CarteReseau
{
    /**
     * @var string
     */
    private $reseau;

    /**
     * @var integer
     */
    private $idReseau;


    /**
     * Set reseau
     *
     * @param string $reseau
     * @return CarteReseau
     */
    public function setReseau($reseau)
    {
        $this->reseau = $reseau;

        return $this;
    }

    /**
     * Get reseau
     *
     * @return string 
     */
    public function getReseau()
    {
        return $this->reseau;
    }

    /**
     * Get idReseau
     *
     * @return integer 
     */
    public function getIdReseau()
    {
        return $this->idReseau;
    }
}
