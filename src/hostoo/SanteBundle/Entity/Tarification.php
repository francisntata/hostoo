<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarification
 *
 * @ORM\Table(name="tarification")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\TarificationRepository")
 */
class Tarification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="designationacte", type="string", length=148, nullable=true)
     */
    private $designationacte;


    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=148, nullable=true)
     */
    private $code;
    /**
     * @ORM\OneToMany(targetEntity="hostoo\GestionBundle\Entity\Tarif", mappedBy="actes")
     */
    private $actes;

    /**
     * @ORM\ManyToOne(targetEntity="Cattarifs" , inversedBy="actes", cascade={"persist"})
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity="hostoo\GestionBundle\Entity\FormuleTarificationProprietaire" , mappedBy="actes")
     */
    private $proforacte;

    /**
     * @ORM\ManyToMany(targetEntity="Facture" , inversedBy="facture")
     */
    private $facture;

    /**
     * @ORM\ManyToMany(targetEntity="Formule", inversedBy="tarif")
     */
    private $formule;

        /**
         *
         * @ORM\OneToOne(targetEntity="ValeurRef",  mappedBy="acte")
         */
        private $valeur;

    /**
     *
     * @ORM\OneToOne(targetEntity="hostoo\GestionBundle\Entity\Tarif", mappedBy="actes" , cascade={"persist","remove"})
     */
    private $tarif;

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
     * Set designationacte
     *
     * @param string $designationacte
     * @return Tarification
     */
    public function setDesignationacte($designationacte)
    {
        $this->designationacte = $designationacte;

        return $this;
    }

    /**
     * Get designationacte
     *
     * @return string
     */
    public function getDesignationacte()
    {
        return $this->designationacte;
    }

    /**
     * Set prive
     *
     * @param integer $prive
     * @return Tarification
     */
    public function setPrive($prive)
    {
        $this->prive = $prive;

        return $this;
    }

    /**
     * Get prive
     *
     * @return integer
     */
    public function getPrive()
    {
        return $this->prive;
    }

    /**
     * Set gardejourferie
     *
     * @param integer $gardejourferie
     * @return Tarification
     */
    public function setGardejourferie($gardejourferie)
    {
        $this->gardejourferie = $gardejourferie;

        return $this;
    }

    /**
     * Get gardejourferie
     *
     * @return integer
     */
    public function getGardejourferie()
    {
        return $this->gardejourferie;
    }

    /**
     * Set conventionne
     *
     * @param integer $conventionne
     * @return Tarification
     */
    public function setConventionne($conventionne)
    {
        $this->conventionne = $conventionne;

        return $this;
    }

    /**
     * Get conventionne
     *
     * @return integer
     */
    public function getConventionne()
    {
        return $this->conventionne;
    }

    /**
     * Set categories
     *
     * @param \hostoo\SanteBundle\Entity\Cattarifs $categories
     * @return Tarification
     */
    public function setCategories(\hostoo\SanteBundle\Entity\Cattarifs $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \hostoo\SanteBundle\Entity\Cattarifs
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->facture = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set facture
     *
     * @param \hostoo\SanteBundle\Entity\Facture $facture
     * @return Tarification
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
     * Add facture
     *
     * @param \hostoo\SanteBundle\Entity\Facture $facture
     * @return Tarification
     */
    public function addFacture(\hostoo\SanteBundle\Entity\Facture $facture)
    {
        $this->facture[] = $facture;

        return $this;
    }

    /**
     * Remove facture
     *
     * @param \hostoo\SanteBundle\Entity\Facture $facture
     */
    public function removeFacture(\hostoo\SanteBundle\Entity\Facture $facture)
    {
        $this->facture->removeElement($facture);
    }

    public function prixtarif()
    {
        if($this->getFacture()->getEpisode()->getPatient()->getTypeclient()->getNom() == 'privé'){
            return $this->getPrive();
        }elseif ($this->getFacture()->getEpisode()->getPatient()->getTypeclient()->getNom() == 'conventionné'){
            return $this->getConventionne();
        }else{
            return $this->getGardejourferie();
        }
    }

    /**
     * Add formule
     *
     * @param \hostoo\SanteBundle\Entity\Formule $formule
     * @return Tarification
     */
    public function addFormule(\hostoo\SanteBundle\Entity\Formule $formule)
    {
        $this->formule[] = $formule;

        return $this;
    }

    /**
     * Remove formule
     *
     * @param \hostoo\SanteBundle\Entity\Formule $formule
     */
    public function removeFormule(\hostoo\SanteBundle\Entity\Formule $formule)
    {
        $this->formule->removeElement($formule);
    }

    /**
     * Get formule
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormule()
    {
        return $this->formule;
    }

    /**
     * Add actes
     *
     * @param \hostoo\GestionBundle\Entity\Tarif $actes
     * @return Tarification
     */
    public function addActe(\hostoo\GestionBundle\Entity\Tarif $actes)
    {
        $this->actes[] = $actes;

        return $this;
    }

    /**
     * Remove actes
     *
     * @param \hostoo\GestionBundle\Entity\Tarif $actes
     */
    public function removeActe(\hostoo\GestionBundle\Entity\Tarif $actes)
    {
        $this->actes->removeElement($actes);
    }

    /**
     * Get actes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActes()
    {
        return $this->actes;
    }


    /**
     * Add proforacte
     *
     * @param \hostoo\GestionBundle\Entity\FormuleTarificationProprietaire $proforacte
     * @return Tarification
     */
    public function addProforacte(\hostoo\GestionBundle\Entity\FormuleTarificationProprietaire $proforacte)
    {
        $this->proforacte[] = $proforacte;

        return $this;
    }

    /**
     * Remove proforacte
     *
     * @param \hostoo\GestionBundle\Entity\FormuleTarificationProprietaire $proforacte
     */
    public function removeProforacte(\hostoo\GestionBundle\Entity\FormuleTarificationProprietaire $proforacte)
    {
        $this->proforacte->removeElement($proforacte);
    }

    /**
     * Get proforacte
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProforacte()
    {
        return $this->proforacte;
    }

    /**
     * Set valeur
     *
     * @param \hostoo\SanteBundle\Entity\ValeurRef $valeur
     * @return Tarification
     */
    public function setValeur(\hostoo\SanteBundle\Entity\ValeurRef $valeur = null)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return \hostoo\SanteBundle\Entity\ValeurRef 
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Tarification
     */
    public function setCode($code)
    {
        $this->code = $code;

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

    /**
     * Set tarif
     *
     * @param \hostoo\GestionBundle\Entity\Tarif $tarif
     * @return Tarification
     */
    public function setTarif(\hostoo\GestionBundle\Entity\Tarif $tarif = null)
    {
        $this->tarif = $tarif;
        $tarif->setActes($this);

        return $this;
    }

    /**
     * Get tarif
     *
     * @return \hostoo\GestionBundle\Entity\Tarif
     */
    public function getTarif()
    {
        return $this->tarif;
    }
}
