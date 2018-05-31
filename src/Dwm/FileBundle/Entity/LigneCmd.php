<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneCmd
 */
class LigneCmd
{
    /**
     * @var integer
     */
    private $qte;

    /**
     * @var float
     */
    private $prix;

    /**
     * @var float
     */
    private $tva;

    /**
     * @var float
     */
    private $remise;

    /**
     * @var integer
     */
    private $numCmd;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \FileBundle\Entity\Produit
     */
    private $idProduit;


    /**
     * Set qte
     *
     * @param integer $qte
     * @return LigneCmd
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return integer 
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return LigneCmd
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set tva
     *
     * @param float $tva
     * @return LigneCmd
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return float 
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set remise
     *
     * @param float $remise
     * @return LigneCmd
     */
    public function setRemise($remise)
    {
        $this->remise = $remise;

        return $this;
    }

    /**
     * Get remise
     *
     * @return float 
     */
    public function getRemise()
    {
        return $this->remise;
    }

    /**
     * Set numCmd
     *
     * @param integer $numCmd
     * @return LigneCmd
     */
    public function setNumCmd($numCmd)
    {
        $this->numCmd = $numCmd;

        return $this;
    }

    /**
     * Get numCmd
     *
     * @return integer 
     */
    public function getNumCmd()
    {
        return $this->numCmd;
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
     * Set idProduit
     *
     * @param \FileBundle\Entity\Produit $idProduit
     * @return LigneCmd
     */
    public function setIdProduit(\FileBundle\Entity\Produit $idProduit = null)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return \FileBundle\Entity\Produit 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }
}
