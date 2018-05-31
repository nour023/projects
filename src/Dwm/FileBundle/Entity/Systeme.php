<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Systeme
 */
class Systeme
{
    /**
     * @var string
     */
    private $systeme;

    /**
     * @var integer
     */
    private $idSysteme;


    /**
     * Set systeme
     *
     * @param string $systeme
     * @return Systeme
     */
    public function setSysteme($systeme)
    {
        $this->systeme = $systeme;

        return $this;
    }

    /**
     * Get systeme
     *
     * @return string 
     */
    public function getSysteme()
    {
        return $this->systeme;
    }

    /**
     * Get idSysteme
     *
     * @return integer 
     */
    public function getIdSysteme()
    {
        return $this->idSysteme;
    }
}
