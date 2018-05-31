<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarteSon
 */
class CarteSon
{
    /**
     * @var string
     */
    private $carteSon;

    /**
     * @var integer
     */
    private $idCarteSon;


    /**
     * Set carteSon
     *
     * @param string $carteSon
     * @return CarteSon
     */
    public function setCarteSon($carteSon)
    {
        $this->carteSon = $carteSon;

        return $this;
    }

    /**
     * Get carteSon
     *
     * @return string 
     */
    public function getCarteSon()
    {
        return $this->carteSon;
    }

    /**
     * Get idCarteSon
     *
     * @return integer 
     */
    public function getIdCarteSon()
    {
        return $this->idCarteSon;
    }
}
