<?php

namespace FileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageSlider
 */
class ImageSlider
{
    /**
     * @var string
     */
    private $src;

    /**
     * @var integer
     */
    private $num;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set src
     *
     * @param string $src
     * @return ImageSlider
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get src
     *
     * @return string 
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set num
     *
     * @param integer $num
     * @return ImageSlider
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
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
