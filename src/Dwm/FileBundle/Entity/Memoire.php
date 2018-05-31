<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Memoire
 */
class Memoire
{
    /**
     * @var string
     */
    private $memoire;

    /**
     * @var integer
     */
    private $idMemoire;


    /**
     * Set memoire
     *
     * @param string $memoire
     * @return Memoire
     */
    public function setMemoire($memoire)
    {
        $this->memoire = $memoire;

        return $this;
    }

    /**
     * Get memoire
     *
     * @return string 
     */
    public function getMemoire()
    {
        return $this->memoire;
    }

    /**
     * Get idMemoire
     *
     * @return integer 
     */
    public function getIdMemoire()
    {
        return $this->idMemoire;
    }
}
