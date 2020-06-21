<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logutilisateurs
 *
 * @ORM\Table(name="logutilisateurs")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\LogutilisateursRepository")
 */
class Logutilisateurs
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
     * @ORM\Column(name="resume", type="text")
     */
    private $resume;

    /**
     *
     * @ORM\ManyToOne(targetEntity="hostoo\UserBundle\Entity\Utilisateur", cascade={"persist"})
     */
    private $auteur;


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
     * Set resume
     *
     * @param string $resume
     * @return Logutilisateurs
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set auteur
     *
     * @param \hostoo\UserBundle\Entity\Utilisateur $auteur
     * @return Logutilisateurs
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
}
