<?php

namespace ComptageMaker\ComptageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TextBlock
 */
class TextBlock
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $blockOrder;

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
     * Set text
     *
     * @param string $text
     * @return TextBlock
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return TextBlock
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set blockOrder
     *
     * @param integer $blockOrder
     * @return TextBlock
     */
    public function setOrder($blockOrder)
    {
        $this->blockOrder = $blockOrder;
    
        return $this;
    }

    /**
     * Get blockOrder
     *
     * @return integer 
     */
    public function getOrder()
    {
        return $this->blockOrder;
    }
}