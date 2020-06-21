<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\EpisodeRepository")
 */
class Episode
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
     * @ORM\Column(name="dateepisode", type="datetime")
     */
    private $dateepisode;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="text", nullable=true)
     */
    private $observation;

    /**
     * @var bool
     *
     * @ORM\Column(name="consultation", type="boolean")
     */
    private $consultation;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Patient", inversedBy="episode")
     *
     */
    private $patient;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"}, inversedBy="episode")
     *
     */
    private $utilisateur;
    /**
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\Facture" , mappedBy="episode")
     */
    private $factures;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\SignesVitaux" , mappedBy="episode")
     */
    private $sv;

    /**
     * @ORM\OneToOne(targetEntity="hostoo\SanteBundle\Entity\Anamnese" , mappedBy="episode")
     */
    private $anamnese;
    /**
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\ExamensPhysiques" , mappedBy="episode")
     */
    private $exphys;
    /**
     * @ORM\OneToOne(targetEntity="hostoo\SanteBundle\Entity\Diagnostic" , mappedBy="episode")
     */
    private $diag;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\Ordonnance", mappedBy="episode")
     *
     */
    private $ordonnance;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\OrdonnanceLabo", mappedBy="episode")
     *
     */
    private $ordonnancelabos;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\SanteBundle\Entity\OrdonnanceImg", mappedBy="episode")
     *
     */
    private $ordonnanceimgs;

    /**
     *
     * @ORM\OneToOne(targetEntity="ListeSoins", mappedBy="episode")
     */
    private $listesoins;

    /**
     * @ORM\OneToOne(targetEntity="hostoo\SanteBundle\Entity\RdvPatient", mappedBy="episode")
     *
     */
    private $rdvpat;

    /**
     * @ORM\OneToOne(targetEntity="hostoo\SanteBundle\Entity\Consultation", mappedBy="episode")
     *
     */
    private $consult;

    public function __construct()
    {
        $this->dateepisode= new \DateTime('now');
        $this->setConsultation(true);
//        $this->factures= new ArrayCollection();
        $this->ordonnancelabos= new ArrayCollection();
        $this->ordonnanceimgs= new ArrayCollection();
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
     * Set dateepisode
     *
     * @param \DateTime $dateepisode
     * @return Episode
     */
    public function setDateepisode($dateepisode)
    {
        $this->dateepisode = $dateepisode;

        return $this;
    }

    /**
     * Get dateepisode
     *
     * @return \DateTime 
     */
    public function getDateepisode()
    {
        return $this->dateepisode;
    }

    /**
     * Set observation
     *
     * @param string $observation
     * @return Episode
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string 
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set consultation
     *
     * @param boolean $consultation
     * @return Episode
     */
    public function setConsultation($consultation)
    {
        $this->consultation = $consultation;

        return $this;
    }

    /**
     * Get consultation
     *
     * @return boolean 
     */
    public function getConsultation()
    {
        return $this->consultation;
    }

    /**
     * Set patient
     *
     * @param \hostoo\SanteBundle\Entity\Patient $patient
     * @return Episode
     */
    public function setPatient(\hostoo\SanteBundle\Entity\Patient $patient)
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
     * Set utilisateur
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $utilisateur
     * @return Episode
     */
    public function setUtilisateur(\hostoo\UserBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \hostoo\UserBundle\Entity\Utilisateur 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Add sv
     *
     * @param \hostoo\SanteBundle\Entity\SignesVitaux $sv
     * @return Episode
     */
    public function addSv(\hostoo\SanteBundle\Entity\SignesVitaux $sv)
    {
        $this->sv[] = $sv;

        return $this;
    }

    /**
     * Remove sv
     *
     * @param \hostoo\SanteBundle\Entity\SignesVitaux $sv
     */
    public function removeSv(\hostoo\SanteBundle\Entity\SignesVitaux $sv)
    {
        $this->sv->removeElement($sv);
    }

    /**
     * Get sv
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSv()
    {
        return $this->sv;
    }

    /**
     * Set anamnese
     *
     * @param \hostoo\SanteBundle\Entity\Anamnese $anamnese
     * @return Episode
     */
    public function setAnamnese(\hostoo\SanteBundle\Entity\Anamnese $anamnese = null)
    {
        $this->anamnese = $anamnese;

        return $this;
    }

    /**
     * Get anamnese
     *
     * @return \hostoo\SanteBundle\Entity\Anamnese 
     */
    public function getAnamnese()
    {
        return $this->anamnese;
    }

    /**
     * Set diag
     *
     * @param \hostoo\SanteBundle\Entity\Diagnotics $diag
     * @return Episode
     */
    public function setDiag(\hostoo\SanteBundle\Entity\Diagnostic $diag = null)
    {
        $this->diag = $diag;

        return $this;
    }

    /**
     * Get diag
     *
     * @return \hostoo\SanteBundle\Entity\Diagnostic
     */
    public function getDiag()
    {
        return $this->diag;
    }


    /**
     * Add ordonnance
     *
     * @param \hostoo\SanteBundle\Entity\Ordonnance $ordonnance
     * @return Episode
     */
    public function addOrdonnance(\hostoo\SanteBundle\Entity\Ordonnance $ordonnance)
    {
        $this->ordonnance[] = $ordonnance;

        return $this;
    }

    /**
     * Remove ordonnance
     *
     * @param \hostoo\SanteBundle\Entity\Ordonnance $ordonnance
     */
    public function removeOrdonnance(\hostoo\SanteBundle\Entity\Ordonnance $ordonnance)
    {
        $this->ordonnance->removeElement($ordonnance);
    }

    /**
     * Get ordonnance
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdonnance()
    {
        return $this->ordonnance;
    }

    /**
     * Add ordonnancelabo
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabo
     * @return Episode
     */
    public function addOrdonnancelabo(\hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabo)
    {
        $this->ordonnancelabos[] = $ordonnancelabo;

        return $this;
    }

    /**
     * Remove ordonnancelabo
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabo
     */
    public function removeOrdonnancelabo(\hostoo\SanteBundle\Entity\OrdonnanceLabo $ordonnancelabo)
    {
        $this->ordonnancelabos->removeElement($ordonnancelabo);
    }

    /**
     * Get ordonnancelabos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdonnancelabos()
    {
        return $this->ordonnancelabos;
    }

    /**
     * Add ordonnanceimg
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimg
     * @return Episode
     */
    public function addOrdonnanceimg(\hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimg)
    {
        $this->ordonnanceimgs[] = $ordonnanceimg;

        return $this;
    }

    /**
     * Remove ordonnanceimg
     *
     * @param \hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimg
     */
    public function removeOrdonnanceimg(\hostoo\SanteBundle\Entity\OrdonnanceImg $ordonnanceimg)
    {
        $this->ordonnanceimgs->removeElement($ordonnanceimg);
    }

    /**
     * Get ordonnanceimg
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrdonnanceimgs()
    {
        return $this->ordonnanceimgs;
    }



    /**
     * Set rdvpat
     *
     * @param \hostoo\SanteBundle\Entity\RdvPatient $rdvpat
     * @return Episode
     */
    public function setRdvpat(\hostoo\SanteBundle\Entity\RdvPatient $rdvpat = null)
    {
        $this->rdvpat = $rdvpat;

        return $this;
    }

    /**
     * Get rdvpat
     *
     * @return \hostoo\SanteBundle\Entity\RDVPatient 
     */
    public function getRdvpat()
    {
        return $this->rdvpat;
    }

    /**
     * Set exphys
     *
     * @param \hostoo\SanteBundle\Entity\ExamensPhysiques $exphys
     * @return Episode
     */
    public function setExphys(\hostoo\SanteBundle\Entity\ExamensPhysiques $exphys = null)
    {
        $this->exphys = $exphys;

        return $this;
    }

    /**
     * Get exphys
     *
     * @return \hostoo\SanteBundle\Entity\ExamensPhysiques 
     */
    public function getExphys()
    {
        return $this->exphys;
    }

    /**
     * Add exphys
     *
     * @param \hostoo\SanteBundle\Entity\ExamensPhysiques $exphys
     * @return Episode
     */
    public function addExphy(\hostoo\SanteBundle\Entity\ExamensPhysiques $exphys)
    {
        $this->exphys[] = $exphys;

        return $this;
    }

    /**
     * Remove exphys
     *
     * @param \hostoo\SanteBundle\Entity\ExamensPhysiques $exphys
     */
    public function removeExphy(\hostoo\SanteBundle\Entity\ExamensPhysiques $exphys)
    {
        $this->exphys->removeElement($exphys);
    }



    /**
     * Set listesoins
     *
     * @param \hostoo\SanteBundle\Entity\ListeSoins $listesoins
     * @return Episode
     */
    public function setListesoins(\hostoo\SanteBundle\Entity\ListeSoins $listesoins = null)
    {
        $this->listesoins = $listesoins;

        return $this;
    }

    /**
     * Get listesoins
     *
     * @return \hostoo\SanteBundle\Entity\ListeSoins 
     */
    public function getListesoins()
    {
        return $this->listesoins;
    }

    public function verifierConsultation()
    {
        foreach($this->getFactures() as $facture)
        {
            foreach ($facture->getCommandes() as $cmds){
            foreach ($cmds->getTarifs() as $mesactes){
                if(($mesactes->getId() >= 1 || $mesactes->getId() <= 13 )&& $facture->getValidation()==1){
                    return true;
                }
            }
            }
        }
        return false;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return (string)$this->id;
    }


    /**
     * Set consult
     *
     * @param \hostoo\SanteBundle\Entity\Consultation $consult
     * @return Episode
     */
    public function setConsult(\hostoo\SanteBundle\Entity\Consultation $consult = null)
    {
        $this->consult = $consult;

        return $this;
    }

    /**
     * Get consult
     *
     * @return \hostoo\SanteBundle\Entity\Consultation 
     */
    public function getConsult()
    {
        return $this->consult;
    }

    /**
     * Add factures
     *
     * @param \hostoo\SanteBundle\Entity\Facture $factures
     * @return Episode
     */
    public function addFacture(\hostoo\SanteBundle\Entity\Facture $factures)
    {
        $this->factures[] = $factures;

        return $this;
    }

    /**
     * Remove factures
     *
     * @param \hostoo\SanteBundle\Entity\Facture $factures
     */
    public function removeFacture(\hostoo\SanteBundle\Entity\Facture $factures)
    {
        $this->factures->removeElement($factures);
    }

    /**
     * Get factures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFactures()
    {
        return $this->factures;
    }

    public function nbActes()
    {
        $som=0;
        foreach ($this->getFactures() as $facture){
            foreach ($facture->getCommandes() as $commande)
            {
                $som+=@count($commande) ;
            }
        }

        return $som;
    }
}
