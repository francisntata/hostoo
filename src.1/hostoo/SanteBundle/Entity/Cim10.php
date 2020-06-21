<?php

namespace hostoo\SanteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cim10
 *
 * @ORM\Table(name="CIM10")
 * @ORM\Entity
 */
class Cim10
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
     * @ORM\Column(name="code", type="string", length=6, nullable=false, unique=true)
     */
    private $code;
    /**
     * @var string
     *
     * @ORM\Column(name="pathologie", type="string", length=180, nullable=true)
     */
    private $pathologie;





    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pathologie
     *
     * @param string $pathologie
     * @return Cim10
     */
    public function setPathologie($pathologie)
    {
        $this->pathologie = $pathologie;

        return $this;
    }

    /**
     * Get pathologie
     *
     * @return string 
     */
    public function getPathologie()
    {
        return $this->pathologie;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Cim10
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
}
