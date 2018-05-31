<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disque
 */
class Disque
{
    /**
     * @var string
     */
    private $disque;

    /**
     * @var integer
     */
    private $idDisque;


    /**
     * Set disque
     *
     * @param string $disque
     * @return Disque
     */
    public function setDisque($disque)
    {
        $this->disque = $disque;

        return $this;
    }

    /**
     * Get disque
     *
     * @return string 
     */
    public function getDisque()
    {
        return $this->disque;
    }

    /**
     * Get idDisque
     *
     * @return integer 
     */
    public function getIdDisque()
    {
        return $this->idDisque;
    }
}
