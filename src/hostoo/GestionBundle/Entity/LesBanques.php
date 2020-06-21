<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LesBanques
 *
 * @ORM\Table(name="les_banques")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\LesBanquesRepository")
 */
class LesBanques
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="compte", type="string", length=255)
     */
    private $compte;


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
     * Set nom
     *
     * @param string $nom
     * @return LesBanques
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set compte
     *
     * @param string $compte
     * @return LesBanques
     */
    public function setCompte($compte)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get compte
     *
     * @return string 
     */
    public function getCompte()
    {
        return $this->compte;
    }

    public function __toString()
{
    return $this->nom;
}
}