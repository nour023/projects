<?php

namespace Dwm\CatalogueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * compte
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class compte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float")
     */
    private $solde;

    /**
     * @var float
     *
     * @ORM\Column(name="numcompte", type="decimal")
     */
    private $numcompte;

    /**
     * @ORM\ManyToOne(targetEntity="client")
     */
    private $client;
    function getClient() {
        return $this->client;
    }

    function setClient($client) {
        $this->client = $client;
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

    /**
     * Set solde
     *
     * @param float $solde
     * @return compte
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    
        return $this;
    }

    /**
     * Get solde
     *
     * @return float 
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set numcompte
     *
     * @param float $numcompte
     * @return compte
     */
    public function setNumcompte($numcompte)
    {
        $this->numcompte = $numcompte;
    
        return $this;
    }

    /**
     * Get numcompte
     *
     * @return float 
     */
    public function getNumcompte()
    {
        return $this->numcompte;
    }
}
