<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 */
class Produit
{
    /**
     * @var string
     */
    private $refProd;

    /**
     * @var float
     */
    private $prix;

    /**
     * @var \DateTime
     */
    private $datePub;

    /**
     * @var integer
     */
    private $idFamille;

    /**
     * @var string
     */
    private $proc;

    /**
     * @var string
     */
    private $disque;

    /**
     * @var string
     */
    private $memoire;

    /**
     * @var string
     */
    private $systeme;

    /**
     * @var string
     */
    private $graphique;

    /**
     * @var string
     */
    private $ecran;

    /**
     * @var string
     */
    private $descImp;

    /**
     * @var string
     */
    private $etat;

    /**
     * @var string
     */
    private $carteSon;

    /**
     * @var string
     */
    private $reseau;

    /**
     * @var boolean
     */
    private $webcam;

    /**
     * @var boolean
     */
    private $micro;

    /**
     * @var string
     */
    private $cadeau;

    /**
     * @var string
     */
    private $graveur;

    /**
     * @var boolean
     */
    private $clavier;

    /**
     * @var boolean
     */
    private $souris;

    /**
     * @var string
     */
    private $fonctionImprimante;

    /**
     * @var string
     */
    private $couleurImprimante;

    /**
     * @var string
     */
    private $formatImprimante;

    /**
     * @var string
     */
    private $impRectoVersoImprimante;

    /**
     * @var string
     */
    private $connectiviteImprimante;

    /**
     * @var string
     */
    private $tailleTv;

    /**
     * @var string
     */
    private $ecranTactileTv;

    /**
     * @var string
     */
    private $garantieTv;

    /**
     * @var string
     */
    private $memoireAccessoire;

    /**
     * @var string
     */
    private $garantieAccessoire;

    /**
     * @var string
     */
    private $typeProduit;

    /**
     * @var integer
     */
    private $idProduit;

    /**
     * @var \FileBundle\Entity\Admin
     */
    private $idAdmin;

    /**
     * @var \FileBundle\Entity\SousFamille
     */
    private $idSfam;


    /**
     * Set refProd
     *
     * @param string $refProd
     * @return Produit
     */
    public function setRefProd($refProd)
    {
        $this->refProd = $refProd;

        return $this;
    }

    /**
     * Get refProd
     *
     * @return string 
     */
    public function getRefProd()
    {
        return $this->refProd;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Produit
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
     * Set datePub
     *
     * @param \DateTime $datePub
     * @return Produit
     */
    public function setDatePub($datePub)
    {
        $this->datePub = $datePub;

        return $this;
    }

    /**
     * Get datePub
     *
     * @return \DateTime 
     */
    public function getDatePub()
    {
        return $this->datePub;
    }

    /**
     * Set idFamille
     *
     * @param integer $idFamille
     * @return Produit
     */
    public function setIdFamille($idFamille)
    {
        $this->idFamille = $idFamille;

        return $this;
    }

    /**
     * Get idFamille
     *
     * @return integer 
     */
    public function getIdFamille()
    {
        return $this->idFamille;
    }

    /**
     * Set proc
     *
     * @param string $proc
     * @return Produit
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
     * Set disque
     *
     * @param string $disque
     * @return Produit
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
     * Set memoire
     *
     * @param string $memoire
     * @return Produit
     */
    public function setMemoire($memoire)
    {
        $this->memoire = $memoire;

        return $this;
    }

    /**
     * Get memoire
     *
     * @return string 
     */
    public function getMemoire()
    {
        return $this->memoire;
    }

    /**
     * Set systeme
     *
     * @param string $systeme
     * @return Produit
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
     * Set graphique
     *
     * @param string $graphique
     * @return Produit
     */
    public function setGraphique($graphique)
    {
        $this->graphique = $graphique;

        return $this;
    }

    /**
     * Get graphique
     *
     * @return string 
     */
    public function getGraphique()
    {
        return $this->graphique;
    }

    /**
     * Set ecran
     *
     * @param string $ecran
     * @return Produit
     */
    public function setEcran($ecran)
    {
        $this->ecran = $ecran;

        return $this;
    }

    /**
     * Get ecran
     *
     * @return string 
     */
    public function getEcran()
    {
        return $this->ecran;
    }

    /**
     * Set descImp
     *
     * @param string $descImp
     * @return Produit
     */
    public function setDescImp($descImp)
    {
        $this->descImp = $descImp;

        return $this;
    }

    /**
     * Get descImp
     *
     * @return string 
     */
    public function getDescImp()
    {
        return $this->descImp;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Produit
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set carteSon
     *
     * @param string $carteSon
     * @return Produit
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
     * Set reseau
     *
     * @param string $reseau
     * @return Produit
     */
    public function setReseau($reseau)
    {
        $this->reseau = $reseau;

        return $this;
    }

    /**
     * Get reseau
     *
     * @return string 
     */
    public function getReseau()
    {
        return $this->reseau;
    }

    /**
     * Set webcam
     *
     * @param boolean $webcam
     * @return Produit
     */
    public function setWebcam($webcam)
    {
        $this->webcam = $webcam;

        return $this;
    }

    /**
     * Get webcam
     *
     * @return boolean 
     */
    public function getWebcam()
    {
        return $this->webcam;
    }

    /**
     * Set micro
     *
     * @param boolean $micro
     * @return Produit
     */
    public function setMicro($micro)
    {
        $this->micro = $micro;

        return $this;
    }

    /**
     * Get micro
     *
     * @return boolean 
     */
    public function getMicro()
    {
        return $this->micro;
    }

    /**
     * Set cadeau
     *
     * @param string $cadeau
     * @return Produit
     */
    public function setCadeau($cadeau)
    {
        $this->cadeau = $cadeau;

        return $this;
    }

    /**
     * Get cadeau
     *
     * @return string 
     */
    public function getCadeau()
    {
        return $this->cadeau;
    }

    /**
     * Set graveur
     *
     * @param string $graveur
     * @return Produit
     */
    public function setGraveur($graveur)
    {
        $this->graveur = $graveur;

        return $this;
    }

    /**
     * Get graveur
     *
     * @return string 
     */
    public function getGraveur()
    {
        return $this->graveur;
    }

    /**
     * Set clavier
     *
     * @param boolean $clavier
     * @return Produit
     */
    public function setClavier($clavier)
    {
        $this->clavier = $clavier;

        return $this;
    }

    /**
     * Get clavier
     *
     * @return boolean 
     */
    public function getClavier()
    {
        return $this->clavier;
    }

    /**
     * Set souris
     *
     * @param boolean $souris
     * @return Produit
     */
    public function setSouris($souris)
    {
        $this->souris = $souris;

        return $this;
    }

    /**
     * Get souris
     *
     * @return boolean 
     */
    public function getSouris()
    {
        return $this->souris;
    }

    /**
     * Set fonctionImprimante
     *
     * @param string $fonctionImprimante
     * @return Produit
     */
    public function setFonctionImprimante($fonctionImprimante)
    {
        $this->fonctionImprimante = $fonctionImprimante;

        return $this;
    }

    /**
     * Get fonctionImprimante
     *
     * @return string 
     */
    public function getFonctionImprimante()
    {
        return $this->fonctionImprimante;
    }

    /**
     * Set couleurImprimante
     *
     * @param string $couleurImprimante
     * @return Produit
     */
    public function setCouleurImprimante($couleurImprimante)
    {
        $this->couleurImprimante = $couleurImprimante;

        return $this;
    }

    /**
     * Get couleurImprimante
     *
     * @return string 
     */
    public function getCouleurImprimante()
    {
        return $this->couleurImprimante;
    }

    /**
     * Set formatImprimante
     *
     * @param string $formatImprimante
     * @return Produit
     */
    public function setFormatImprimante($formatImprimante)
    {
        $this->formatImprimante = $formatImprimante;

        return $this;
    }

    /**
     * Get formatImprimante
     *
     * @return string 
     */
    public function getFormatImprimante()
    {
        return $this->formatImprimante;
    }

    /**
     * Set impRectoVersoImprimante
     *
     * @param string $impRectoVersoImprimante
     * @return Produit
     */
    public function setImpRectoVersoImprimante($impRectoVersoImprimante)
    {
        $this->impRectoVersoImprimante = $impRectoVersoImprimante;

        return $this;
    }

    /**
     * Get impRectoVersoImprimante
     *
     * @return string 
     */
    public function getImpRectoVersoImprimante()
    {
        return $this->impRectoVersoImprimante;
    }

    /**
     * Set connectiviteImprimante
     *
     * @param string $connectiviteImprimante
     * @return Produit
     */
    public function setConnectiviteImprimante($connectiviteImprimante)
    {
        $this->connectiviteImprimante = $connectiviteImprimante;

        return $this;
    }

    /**
     * Get connectiviteImprimante
     *
     * @return string 
     */
    public function getConnectiviteImprimante()
    {
        return $this->connectiviteImprimante;
    }

    /**
     * Set tailleTv
     *
     * @param string $tailleTv
     * @return Produit
     */
    public function setTailleTv($tailleTv)
    {
        $this->tailleTv = $tailleTv;

        return $this;
    }

    /**
     * Get tailleTv
     *
     * @return string 
     */
    public function getTailleTv()
    {
        return $this->tailleTv;
    }

    /**
     * Set ecranTactileTv
     *
     * @param string $ecranTactileTv
     * @return Produit
     */
    public function setEcranTactileTv($ecranTactileTv)
    {
        $this->ecranTactileTv = $ecranTactileTv;

        return $this;
    }

    /**
     * Get ecranTactileTv
     *
     * @return string 
     */
    public function getEcranTactileTv()
    {
        return $this->ecranTactileTv;
    }

    /**
     * Set garantieTv
     *
     * @param string $garantieTv
     * @return Produit
     */
    public function setGarantieTv($garantieTv)
    {
        $this->garantieTv = $garantieTv;

        return $this;
    }

    /**
     * Get garantieTv
     *
     * @return string 
     */
    public function getGarantieTv()
    {
        return $this->garantieTv;
    }

    /**
     * Set memoireAccessoire
     *
     * @param string $memoireAccessoire
     * @return Produit
     */
    public function setMemoireAccessoire($memoireAccessoire)
    {
        $this->memoireAccessoire = $memoireAccessoire;

        return $this;
    }

    /**
     * Get memoireAccessoire
     *
     * @return string 
     */
    public function getMemoireAccessoire()
    {
        return $this->memoireAccessoire;
    }

    /**
     * Set garantieAccessoire
     *
     * @param string $garantieAccessoire
     * @return Produit
     */
    public function setGarantieAccessoire($garantieAccessoire)
    {
        $this->garantieAccessoire = $garantieAccessoire;

        return $this;
    }

    /**
     * Get garantieAccessoire
     *
     * @return string 
     */
    public function getGarantieAccessoire()
    {
        return $this->garantieAccessoire;
    }

    /**
     * Set typeProduit
     *
     * @param string $typeProduit
     * @return Produit
     */
    public function setTypeProduit($typeProduit)
    {
        $this->typeProduit = $typeProduit;

        return $this;
    }

    /**
     * Get typeProduit
     *
     * @return string 
     */
    public function getTypeProduit()
    {
        return $this->typeProduit;
    }

    /**
     * Get idProduit
     *
     * @return integer 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set idAdmin
     *
     * @param \FileBundle\Entity\Admin $idAdmin
     * @return Produit
     */
    public function setIdAdmin(\FileBundle\Entity\Admin $idAdmin = null)
    {
        $this->idAdmin = $idAdmin;

        return $this;
    }

    /**
     * Get idAdmin
     *
     * @return \FileBundle\Entity\Admin 
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    /**
     * Set idSfam
     *
     * @param \FileBundle\Entity\SousFamille $idSfam
     * @return Produit
     */
    public function setIdSfam(\FileBundle\Entity\SousFamille $idSfam = null)
    {
        $this->idSfam = $idSfam;

        return $this;
    }

    /**
     * Get idSfam
     *
     * @return \FileBundle\Entity\SousFamille 
     */
    public function getIdSfam()
    {
        return $this->idSfam;
    }
}
