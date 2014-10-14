<?php

namespace MaisonLigues\CroisiereBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traversee
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MaisonLigues\CroisiereBundle\Entity\TraverseeRepository")
 */
class Traversee
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="heure", type="integer")
     */
    private $heure;

    /**
    * @var Liaison $laliaison
    *
    * @ORM\ManyToOne(targetEntity="Liaison")
    * @ORM\JoinColumn(nullable=false)
    */
    private $laliaison;

    /**
    * @var Bateau $lebateau
    *
    * @ORM\ManyToOne(targetEntity="Bateau")
    * @ORM\JoinColumn(nullable=false)
    */
    private $lebateau;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Traversee
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param integer $heure
     * @return Traversee
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return integer 
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set laliaison
     *
     * @param \MaisonLigues\CroisiereBundle\Entity\Liaison $laliaison
     * @return Traversee
     */
    public function setLaliaison(\MaisonLigues\CroisiereBundle\Entity\Liaison $laliaison)
    {
        $this->laliaison = $laliaison;

        return $this;
    }

    /**
     * Get laliaison
     *
     * @return \MaisonLigues\CroisiereBundle\Entity\Liaison 
     */
    public function getLaliaison()
    {
        return $this->laliaison;
    }

    /**
     * Set lebateau
     *
     * @param \MaisonLigues\CroisiereBundle\Entity\Bateau $lebateau
     * @return Traversee
     */
    public function setLebateau(\MaisonLigues\CroisiereBundle\Entity\Bateau $lebateau)
    {
        $this->lebateau = $lebateau;

        return $this;
    }

    /**
     * Get lebateau
     *
     * @return \MaisonLigues\CroisiereBundle\Entity\Bateau 
     */
    public function getLebateau()
    {
        return $this->lebateau;
    }
}
