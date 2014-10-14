<?php

namespace MaisonLigues\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liaison
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MaisonLigues\CroisiereBundle\Entity\LiaisonRepository")
 */
class Liaison
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
     * @var integer
     *
     * @ORM\Column(name="distance", type="integer")
     */
    private $distance;

    /**
    * @var Secteur $lesecteur
    *
    * @ORM\ManyToOne(targetEntity="Secteur")
    * @ORM\JoinColumn(nullable=false)
    */
    private $lesecteur;

    /**
    * @var Port $portdepart
    *
    * @ORM\ManyToOne(targetEntity="Port")
    * @ORM\JoinColumn(nullable=false)
    */
    private $portdepart;

    /**
    * @var Port $portarrive
    *
    * @ORM\ManyToOne(targetEntity="Port")
    * @ORM\JoinColumn(nullable=false)
    */
    private $portarrive;


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
     * Set distance
     *
     * @param integer $distance
     * @return Liaison
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return integer 
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set lesecteur
     *
     * @param \MaisonLigues\CroisiereBundle\Entity\Secteur $lesecteur
     * @return Liaison
     */
    public function setLesecteur(\MaisonLigues\CroisiereBundle\Entity\Secteur $lesecteur)
    {
        $this->lesecteur = $lesecteur;

        return $this;
    }

    /**
     * Get lesecteur
     *
     * @return \MaisonLigues\CroisiereBundle\Entity\Secteur 
     */
    public function getLesecteur()
    {
        return $this->lesecteur;
    }

    /**
     * Set portdepart
     *
     * @param \MaisonLigues\CroisiereBundle\Entity\Port $portdepart
     * @return Liaison
     */
    public function setPortdepart(\MaisonLigues\CroisiereBundle\Entity\Port $portdepart)
    {
        $this->portdepart = $portdepart;

        return $this;
    }

    /**
     * Get portdepart
     *
     * @return \MaisonLigues\CroisiereBundle\Entity\Port 
     */
    public function getPortdepart()
    {
        return $this->portdepart;
    }

    /**
     * Set portarrive
     *
     * @param \MaisonLigues\CroisiereBundle\Entity\Port $portarrive
     * @return Liaison
     */
    public function setPortarrive(\MaisonLigues\CroisiereBundle\Entity\Port $portarrive)
    {
        $this->portarrive = $portarrive;

        return $this;
    }

    /**
     * Get portarrive
     *
     * @return \MaisonLigues\CroisiereBundle\Entity\Port 
     */
    public function getPortarrive()
    {
        return $this->portarrive;
    }
}
