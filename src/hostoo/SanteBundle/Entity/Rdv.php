<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Rdv
 *
 * @ORM\Table(name="rdv")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\RdvRepository")
 */
class Rdv
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
     * @var \DateTime
     *
     * @ORM\Column(name="heure_debut", type="time")
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fin", type="time")
     */
    private $heureFin;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrepatients", type="integer", nullable=true)
     */
    private $nbrepatients;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponibilite", type="boolean")
     */
    private $disponibilite;

    /**
     * @var int
     *
     * @ORM\Column(name="patientsrecus", type="integer", nullable=true)
     */
    private $patientsrecus;

    /**
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"})
     *
     */
    private $medecin;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\RdvPatient", mappedBy="rdv")
     *
     */
    private $RDVspatients;

    public function __construct(){
        $this->daterdv= new \DateTime();
        $this->heureDebut=new \DateTime('08:00');
        $this->heureFin=new \DateTime('18:00');
        $this->nbrepatients=0;
        $this->patientsrecus=0;
        $this->RDVspatients= new ArrayCollection;
        $this->disponibilite=true;
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
     * @return Rdv
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
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     * @return Rdv
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime 
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     * @return Rdv
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime 
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set nbrepatients
     *
     * @param integer $nbrepatients
     * @return Rdv
     */
    public function setNbrepatients($nbrepatients)
    {
        $this->nbrepatients = $nbrepatients;

        return $this;
    }

    /**
     * Get nbrepatients
     *
     * @return integer 
     */
    public function getNbrepatients()
    {
        return $this->nbrepatients;
    }

    /**
     * Set patientsrecus
     *
     * @param integer $patientsrecus
     * @return Rdv
     */
    public function setPatientsrecus($patientsrecus)
    {
        $this->patientsrecus = $patientsrecus;

        return $this;
    }

    /**
     * Get patientsrecus
     *
     * @return integer 
     */
    public function getPatientsrecus()
    {
        return $this->patientsrecus;
    }

    /**
     * Set medecin
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $medecin
     * @return Rdv
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
     * Set disponibilite
     *
     * @param boolean $disponibilite
     * @return Rdv
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * Get disponibilite
     *
     * @return boolean 
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * Add RDVspatients
     *
     * @param \hostoo\SanteBundle\Entity\RdvPatient $rDVspatients
     * @return Rdv
     */
    public function addRDVspatient(\hostoo\SanteBundle\Entity\RdvPatient $rDVspatients)
    {
        $this->RDVspatients[] = $rDVspatients;
        $rDVspatients->setRdv($this);

        return $this;
    }

    /**
     * Remove RDVspatients
     *
     * @param \hostoo\SanteBundle\Entity\RdvPatient $rDVspatients
     */
    public function removeRDVspatient(\hostoo\SanteBundle\Entity\RdvPatient $rDVspatients)
    {
        $this->RDVspatients->removeElement($rDVspatients);
    }

    /**
     * Get RDVspatients
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRDVspatients()
    {
        return $this->RDVspatients;
    }

    public function checkRDV(\hostoo\SanteBundle\Entity\RdvPatient $patrdv)
    {


        if($patrdv->getRecu()==0){
            $doc=$patrdv->getRdv();
            $patrdv->setRecu(1);
            $doc->setNbrepatients($doc->getNbrepatients()-1);
            $doc->setPatientsrecus($doc->getPatientsrecus()+1);
        }

    }
}
