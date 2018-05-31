<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 */
class Commande
{
    /**
     * @var string
     */
    private $dateCmd;

    /**
     * @var string
     */
    private $dateLivraison;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var float
     */
    private $totalttc;

    /**
     * @var string
     */
    private $etatCmd;

    /**
     * @var integer
     */
    private $numCmd;

    /**
     * @var \FileBundle\Entity\Client
     */
    private $idClient;


    /**
     * Set dateCmd
     *
     * @param string $dateCmd
     * @return Commande
     */
    public function setDateCmd($dateCmd)
    {
        $this->dateCmd = $dateCmd;

        return $this;
    }

    /**
     * Get dateCmd
     *
     * @return string 
     */
    public function getDateCmd()
    {
        return $this->dateCmd;
    }

    /**
     * Set dateLivraison
     *
     * @param string $dateLivraison
     * @return Commande
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return string 
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Commande
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set totalttc
     *
     * @param float $totalttc
     * @return Commande
     */
    public function setTotalttc($totalttc)
    {
        $this->totalttc = $totalttc;

        return $this;
    }

    /**
     * Get totalttc
     *
     * @return float 
     */
    public function getTotalttc()
    {
        return $this->totalttc;
    }

    /**
     * Set etatCmd
     *
     * @param string $etatCmd
     * @return Commande
     */
    public function setEtatCmd($etatCmd)
    {
        $this->etatCmd = $etatCmd;

        return $this;
    }

    /**
     * Get etatCmd
     *
     * @return string 
     */
    public function getEtatCmd()
    {
        return $this->etatCmd;
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
     * Set idClient
     *
     * @param \FileBundle\Entity\Client $idClient
     * @return Commande
     */
    public function setIdClient(\FileBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \FileBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
