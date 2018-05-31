<?php

namespace Dwm\CatalogueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * command
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class command
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
     * @var string
     *
     * @ORM\Column(name="datecmd", type="string", length=255)
     */
    private $datecmd;

    /**
     * @var string
     *
     * @ORM\Column(name="dateliv", type="string", length=255)
     */
    private $dateliv;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var float
     *
     * @ORM\Column(name="totalttc", type="float")
     */
    private $totalttc;

    /**
     * @var string
     *
     * @ORM\Column(name="etatcom", type="string", length=255)
     */
    private $etatcom;


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
     * Set datecmd
     *
     * @param string $datecmd
     * @return command
     */
    public function setDatecmd($datecmd)
    {
        $this->datecmd = $datecmd;
    
        return $this;
    }

    /**
     * Get datecmd
     *
     * @return string 
     */
    public function getDatecmd()
    {
        return $this->datecmd;
    }

    /**
     * Set dateliv
     *
     * @param string $dateliv
     * @return command
     */
    public function setDateliv($dateliv)
    {
        $this->dateliv = $dateliv;
    
        return $this;
    }

    /**
     * Get dateliv
     *
     * @return string 
     */
    public function getDateliv()
    {
        return $this->dateliv;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return command
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
     * @return command
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
     * Set etatcom
     *
     * @param string $etatcom
     * @return command
     */
    public function setEtatcom($etatcom)
    {
        $this->etatcom = $etatcom;
    
        return $this;
    }

    /**
     * Get etatcom
     *
     * @return string 
     */
    public function getEtatcom()
    {
        return $this->etatcom;
    }
}
