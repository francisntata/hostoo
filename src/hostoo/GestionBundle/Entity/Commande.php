<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecmd", type="datetime")
     */
    private $datecmd;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Facture", cascade={"remove"}, inversedBy="commandes")
     */
    private $facture;

    /**
     *
     *
     * @ORM\ManyToMany(targetEntity="Tarif", inversedBy="commandes")
     */
    private $tarifs;



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
     * @param \DateTime $datecmd
     * @return Commande
     */
    public function setDatecmd($datecmd)
    {
        $this->datecmd = $datecmd;

        return $this;
    }

    /**
     * Get datecmd
     *
     * @return \DateTime 
     */
    public function getDatecmd()
    {
        return $this->datecmd;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tarifs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->datecmd = new \DateTime();
    }

    /**
     * Set facture
     *
     * @param \hostoo\SanteBundle\Entity\Facture $facture
     * @return Commande
     */
    public function setFacture(\hostoo\SanteBundle\Entity\Facture $facture = null)
    {
        $this->facture = $facture;

        return $this;
    }

    /**
     * Get facture
     *
     * @return \hostoo\SanteBundle\Entity\Facture 
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * Add tarif
     *
     * @param \hostoo\GestionBundle\Entity\Tarif $tarifs
     * @return Commande
     */
    public function addTarif(\hostoo\GestionBundle\Entity\Tarif $tarif)
    {
        $this->tarifs[] = $tarif;
       // $this->addTarif($tarif);

        return $this;
    }

    /**
     * Remove tarifs
     *
     * @param \hostoo\GestionBundle\Entity\Tarif $tarifs
     */
    public function removeTarif(\hostoo\GestionBundle\Entity\Tarif $tarif)
    {
        $this->tarifs->removeElement($tarif);
    }

    /**
     * Get tarifs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTarifs()
    {
        return $this->tarifs;
    }
}
