<?php

namespace Dwm\CatalogueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * lignedecommande
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class lignedecommande
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
     * @ORM\Column(name="qte", type="float")
     */
    private $qte;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="float")
     */
    private $tva;

    /**
     * @var float
     *
     * @ORM\Column(name="remise", type="float")
     */
    private $remise;


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
     * Set qte
     *
     * @param float $qte
     * @return lignedecommande
     */
    public function setQte($qte)
    {
        $this->qte = $qte;
    
        return $this;
    }

    /**
     * Get qte
     *
     * @return float 
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return lignedecommande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

      /**
     * @ORM\ManyToOne(targetEntity="command")
     */
    private $commande;
    
    function getCommande() {
        return $this->commande;
    }

    function setCommande($commande) {
        $this->commande = $commande;
    }

     /**
     * @ORM\ManyToOne(targetEntity="Article")
     */
    private $article;   
    function getArticle() {
        return $this->article;
    }

    function setArticle($article) {
        $this->article = $article;
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
     * @return lignedecommande
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
     * @return lignedecommande
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
}
