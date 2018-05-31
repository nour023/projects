<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Processeur
 */
class Processeur
{
    /**
     * @var string
     */
    private $proc;

    /**
     * @var integer
     */
    private $idProc;


    /**
     * Set proc
     *
     * @param string $proc
     * @return Processeur
     */
    public function setProc($proc)
    {
        $this->proc = $proc;

        return $this;
    }

    /**
     * Get proc
     *
     * @return string 
     */
    public function getProc()
    {
        return $this->proc;
    }

    /**
     * Get idProc
     *
     * @return integer 
     */
    public function getIdProc()
    {
        return $this->idProc;
    }
}
