<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultation
 *
 * @ORM\Table(name="consultation")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\ConsultationRepository")
 */
class Consultation
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
     * @ORM\Column(name="dateconsultation", type="datetime")
     */
    private $dateconsultation;

    /**
     * @var string
     *
     * @ORM\Column(name="consultation", type="text")
     */
    private $consultation;

    /**
     * @ORM\OneToOne(targetEntity="Episode", inversedBy="consult")
     * @ORM\JoinColumn(nullable=true)
     */
    private $episode;

    /**
     * @ORM\OneToOne(targetEntity="hostoo\HospisBundle\Entity\Hospitalisation", inversedBy="consult")
     * @ORM\JoinColumn(nullable=true)
     */
    private $hospitalisation;

    public function __construct()
    {
        $this->dateconsultation= new \DateTime('now');
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
     * Set dateconsultation
     *
     * @param \DateTime $dateconsultation
     * @return Consultation
     */
    public function setDateconsultation($dateconsultation)
    {
        $this->dateconsultation = $dateconsultation;

        return $this;
    }

    /**
     * Get dateconsultation
     *
     * @return \DateTime 
     */
    public function getDateconsultation()
    {
        return $this->dateconsultation;
    }

    /**
     * Set consultation
     *
     * @param string $consultation
     * @return Consultation
     */
    public function setConsultation($consultation)
    {
        $this->consultation = $consultation;

        return $this;
    }

    /**
     * Get consultation
     *
     * @return string 
     */
    public function getConsultation()
    {
        return $this->consultation;
    }

    /**
     * Set episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return Consultation
     */
    public function setEpisode(\hostoo\SanteBundle\Entity\Episode $episode = null)
    {
        $this->episode = $episode;

        return $this;
    }

    /**
     * Get episode
     *
     * @return \hostoo\SanteBundle\Entity\Episode 
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * Set hospitalisation
     *
     * @param \hostoo\HospisBundle\Entity\Hospitalisation $hospitalisation
     * @return Consultation
     */
    public function setHospitalisation(\hostoo\HospisBundle\Entity\Hospitalisation $hospitalisation = null)
    {
        $this->hospitalisation = $hospitalisation;

        return $this;
    }

    /**
     * Get hospitalisation
     *
     * @return \hostoo\HospisBundle\Entity\Hospitalisation 
     */
    public function getHospitalisation()
    {
        return $this->hospitalisation;
    }
}