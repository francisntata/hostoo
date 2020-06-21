<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posologie
 *
 * @ORM\Table(name="posologie")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\PosologieRepository")
 */
class Posologie
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
     * @var string
     *
     * @ORM\Column(name="produit", type="string", length=255)
     */
    private $produit;
    /**
     * @var string
     *
     * @ORM\Column(name="posologie", type="string", length=255)
     */
    private $posologie;

    /**
     * @var string
     *
     * @ORM\Column(name="conduite", type="string", length=255, nullable=true)
     */
    private $conduite;

    /**
     * @var int
     *
     * @ORM\Column(name="qte", type="integer")
     */
    private $qte;


    /**
     * @ORM\ManyToOne(targetEntity="Ordonnance", inversedBy="posologie")
     */
    private $ordonnance;


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
     * Set posologie
     *
     * @param string $posologie
     * @return Posologie
     */
    public function setPosologie($posologie)
    {
        $this->posologie = $posologie;

        return $this;
    }

    /**
     * Get posologie
     *
     * @return string 
     */
    public function getPosologie()
    {
        return $this->posologie;
    }

    /**
     * Set qte
     *
     * @param integer $qte
     * @return Posologie
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return integer 
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set ordonnance
     *
     * @param \hostoo\SanteBundle\Entity\Ordonnance $ordonnance
     * @return Posologie
     */
    public function setOrdonnance(\hostoo\SanteBundle\Entity\Ordonnance $ordonnance = null)
    {
        $this->ordonnance = $ordonnance;

        return $this;
    }

    /**
     * Get ordonnance
     *
     * @return \hostoo\SanteBundle\Entity\Ordonnance 
     */
    public function getOrdonnance()
    {
        return $this->ordonnance;
    }

    /**
     * Set conduite
     *
     * @param string $conduite
     * @return Posologie
     */
    public function setConduite($conduite)
    {
        $this->conduite = $conduite;

        return $this;
    }

    /**
     * Get conduite
     *
     * @return string 
     */
    public function getConduite()
    {
        return $this->conduite;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->posologie;
    }

    /**
     * Set produit
     *
     * @param string $produit
     * @return Posologie
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return string 
     */
    public function getProduit()
    {
        return $this->produit;
    }
}