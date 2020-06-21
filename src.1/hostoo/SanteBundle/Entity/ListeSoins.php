<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListeSoins
 *
 * @ORM\Table(name="liste_soins")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\ListeSoinsRepository")
 */
class ListeSoins
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
     * @ORM\Column(name="datesoins", type="datetime")
     */
    private $datesoins;

    /**
     * @var bool
     *
     * @ORM\Column(name="rechecked", type="boolean", nullable=true)
     */
    private $rechecked;

    /**
     *
     * @ORM\OneToOne(targetEntity="Episode", inversedBy="listesoins")
     */
    private $episode;

    public function __construct()
    {
        $this->datesoins=new \DateTime('now');
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
     * Set datesoins
     *
     * @param \DateTime $datesoins
     * @return ListeSoins
     */
    public function setDatesoins($datesoins)
    {
        $this->datesoins = $datesoins;

        return $this;
    }

    /**
     * Get datesoins
     *
     * @return \DateTime 
     */
    public function getDatesoins()
    {
        return $this->datesoins;
    }

    /**
     * Set rechecked
     *
     * @param boolean $rechecked
     * @return ListeSoins
     */
    public function setRechecked($rechecked)
    {
        $this->rechecked = $rechecked;

        return $this;
    }

    /**
     * Get rechecked
     *
     * @return boolean 
     */
    public function getRechecked()
    {
        return $this->rechecked;
    }

    /**
     * Set episode
     *
     * @param \hostoo\SanteBundle\Entity\Episode $episode
     * @return ListeSoins
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
}