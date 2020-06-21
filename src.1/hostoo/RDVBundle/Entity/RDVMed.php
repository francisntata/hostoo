<?php

namespace hostoo\RDVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * RDVMed
 *
 * @ORM\Table(name="r_d_v_med")
 * @ORM\Entity(repositoryClass="hostoo\RDVBundle\Repository\RDVMedRepository")
 */
class RDVMed
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
     * @ORM\Column(name="daterdv", type="date")
     */
    private $daterdv;

    /**
     *
     * @var string
     * @ORM\Column(name="motif", type="text", nullable=true)
     */
    private $motif;

    /**
     *
     * @ORM\Column(name="etat", type="string", nullable=true)
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\SanteBundle\Entity\Patient")
     */
    private $patients;

    /**
     *@ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $medecin;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etat='PAS RECU';
        $this->daterdv=new \DateTime();
        $this->patients = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set daterdv
     *
     * @param \DateTime $daterdv
     * @return RDVMed
     */
    public function setDaterdv($daterdv)
    {
        $this->daterdv = $daterdv;

        return $this;
    }

    /**
     * Get daterdv
     *
     * @return \DateTime 
     */
    public function getDaterdv()
    {
        return $this->daterdv;
    }


    /**
     * Set patients
     *
     * @param \hostoo\SanteBundle\Entity\Patient $patients
     * @return RDVMed
     */
    public function setPatients(\hostoo\SanteBundle\Entity\Patient $patients = null)
    {
        $this->patients = $patients;

        return $this;
    }

    /**
     * Get patients
     *
     * @return \hostoo\SanteBundle\Entity\Patient 
     */
    public function getPatients()
    {
        return $this->patients;
    }

    /**
     * Set medecin
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $medecin
     * @return RDVMed
     */
    public function setMedecin(\hostoo\UserBundle\Entity\Utilisateur $medecin = null)
    {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * Get medecin
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur 
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * Set motif
     *
     * @param string $motif
     * @return RDVMed
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string 
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return RDVMed
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
}
