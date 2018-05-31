<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecran
 */
class Ecran
{
    /**
     * @var string
     */
    private $des;

    /**
     * @var string
     */
    private $taille;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set des
     *
     * @param string $des
     * @return Ecran
     */
    public function setDes($des)
    {
        $this->des = $des;

        return $this;
    }

    /**
     * Get des
     *
     * @return string 
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * Set taille
     *
     * @param string $taille
     * @return Ecran
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
