<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Webcam
 */
class Webcam
{
    /**
     * @var string
     */
    private $webcam;

    /**
     * @var integer
     */
    private $idWebcam;


    /**
     * Set webcam
     *
     * @param string $webcam
     * @return Webcam
     */
    public function setWebcam($webcam)
    {
        $this->webcam = $webcam;

        return $this;
    }

    /**
     * Get webcam
     *
     * @return string 
     */
    public function getWebcam()
    {
        return $this->webcam;
    }

    /**
     * Get idWebcam
     *
     * @return integer 
     */
    public function getIdWebcam()
    {
        return $this->idWebcam;
    }
}
