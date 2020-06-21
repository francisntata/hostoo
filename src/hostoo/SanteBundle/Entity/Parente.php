<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parente
 *
 * @ORM\Table(name="parente")
 * @ORM\Entity(repositoryClass="hostoo\SanteBundle\Repository\ParenteRepository")
 */
class Parente
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
     * @ORM\Column(name="parente", type="string", length=50)
     */
    private $parente;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set parente
     *
     * @param string $parente
     *
     * @return Parente
     */
    public function setParente($parente)
    {
        $this->parente = $parente;

        return $this;
    }

    /**
     * Get parente
     *
     * @return string
     */
    public function getParente()
    {
        return $this->parente;
    }

    public function __toString()
    {
        return $this->parente;
    }
}