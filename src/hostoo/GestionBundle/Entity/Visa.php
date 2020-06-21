<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visa
 *
 * @ORM\Table(name="visa")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\VisaRepository")
 */
class Visa
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
     * @ORM\Column(name="datevisa", type="datetime")
     */
    private $datevisa;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_usd", type="decimal", precision=10, scale=2)
     */
    private $montantUsd;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", nullable=true)
     */
    private $code;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Patient", cascade={"persist"})
     */
    private $patient;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"})
     */
    private $auteur;

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return (string)$this->code;
    }


    public function __construct()
    {
        $this->datevisa = new \DateTime('now');
        $this->montantUsd= 0;

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

    /**
     * Set datevisa
     *
     * @param \DateTime $datevisa
     * @return Visa
     */
    public function setDatevisa($datevisa)
    {
        $this->datevisa = $datevisa;

        return $this;
    }

    /**
     * Get datevisa
     *
     * @return \DateTime 
     */
    public function getDatevisa()
    {
        return $this->datevisa;
    }

    /**
     * Set montantUsd
     *
     * @param string $montantUsd
     * @return Visa
     */
    public function setMontantUsd($montantUsd)
    {
        $this->montantUsd = $montantUsd;

        return $this;
    }

    /**
     * Get montantUsd
     *
     * @return string 
     */
    public function getMontantUsd()
    {
        return $this->montantUsd;
    }

    /**
     * Set patient
     *
     * @param \hostoo\SanteBundle\Entity\Patient $patient
     * @return Visa
     */
    public function setPatient(\hostoo\SanteBundle\Entity\Patient $patient = null)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \hostoo\SanteBundle\Entity\Patient 
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set auteur
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $auteur
     * @return Visa
     */
    public function setAuteur(\hostoo\UserBundle\Entity\Utilisateur $auteur = null)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }



    /**
     * Set code
     *
     * @return Visa
     */
    public function setCode()
    {
        $this->code = $this->code = date_format($this->datevisa,'YMd')."-".$this->getPatient()->getId()." ".$this->id;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }
}