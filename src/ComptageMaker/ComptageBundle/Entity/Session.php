<?php

namespace ComptageMaker\ComptageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 */
class Session
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $entries;

    /**
     * @var string
     * vélos, motos, ...
     */
    private $type;

    /**
     * @var integer
     * rémunération en euros/heures
     */
    private $prix;

    /**
     * @var \ComptageMaker\ComptageBundle\Entity\Inscrit
     */
    private $inscrits;

    /**
     * @var \ComptageMaker\ComptageBundle\Entity\Plage
     */
    private $plage;

    /**
     * @var \ComptageMaker\ComptageBundle\Entity\Comptage
     */
    private $comptage;

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
     * Set entries
     *
     * @param integer $entries
     * @return Session
     */
    public function setEntries($entries)
    {
        $this->entries = $entries;
    
        return $this;
    }

    /**
     * Get entries
     *
     * @return integer 
     */
    public function getEntries()
    {
        return $this->entries;
    }


    /**
     * Set type
     *
     * @param string $type
     * @return Session
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Session
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->inscrits = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add inscrits
     *
     * @param \ComptageMaker\ComptageBundle\Entity\Inscrit $inscrits
     * @return Session
     */
    public function addInscrit(\ComptageMaker\ComptageBundle\Entity\Inscrit $inscrits)
    {
        $this->inscrits[] = $inscrits;
    
        return $this;
    }

    /**
     * Remove inscrits
     *
     * @param \ComptageMaker\ComptageBundle\Entity\Inscrit $inscrits
     */
    public function removeInscrit(\ComptageMaker\ComptageBundle\Entity\Inscrit $inscrits)
    {
        $this->inscrits->removeElement($inscrits);
    }

    /**
     * Get inscrits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInscrits()
    {
        return $this->inscrits;
    }




    /**
     * Set plage
     *
     * @param \ComptageMaker\ComptageBundle\Entity\Plage $plage
     * @return Session
     */
    public function setPlage(\ComptageMaker\ComptageBundle\Entity\Plage $plage = null)
    {
        $this->plage = $plage;
    
        return $this;
    }

    /**
     * Get plage
     *
     * @return \ComptageMaker\ComptageBundle\Entity\Plage 
     */
    public function getPlage()
    {
        return $this->plage;
    }

    /**
     * Set comptage
     *
     * @param \ComptageMaker\ComptageBundle\Entity\Comptage $comptage
     * @return Session
     */
    public function setComptage(\ComptageMaker\ComptageBundle\Entity\Comptage $comptage = null)
    {
        $this->comptage = $comptage;
    
        return $this;
    }

    /**
     * Get comptage
     *
     * @return \ComptageMaker\ComptageBundle\Entity\Comptage 
     */
    public function getComptage()
    {
        return $this->comptage;
    }
}