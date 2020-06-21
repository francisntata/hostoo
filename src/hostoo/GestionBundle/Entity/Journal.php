<?php

namespace hostoo\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journal
 *
 * @ORM\Table(name="journal")
 * @ORM\Entity(repositoryClass="hostoo\GestionBundle\Repository\JournalRepository")
 */
class Journal
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
     * @ORM\Column(name="datejr", type="datetime")
     */
    private $datejr;

    /**
     * @var int
     *
     * @ORM\Column(name="qte", type="integer")
     */
    private $qte;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Article" , cascade={"persist"})
     */
    private $article;


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
     * Set datejr
     *
     * @param \DateTime $datejr
     * @return Journal
     */
    public function setDatejr($datejr)
    {
        $this->datejr = $datejr;

        return $this;
    }

    /**
     * Get datejr
     *
     * @return \DateTime 
     */
    public function getDatejr()
    {
        return $this->datejr;
    }

    /**
     * Set qte
     *
     * @param integer $qte
     * @return Journal
     */
    public function setQte($qte)
    {
        $this->qte = $qte;
        $this->getArticle()->soustraireQte($qte);


        return $this;
    }

    /**
     * Get qte
     *
     * @return integer 
     */
    public function getQte()
    {
        return $this->qte;
    }



    /**
     * Set article
     *
     * @param \hostoo\GestionBundle\Entity\Article $article
     * @return Journal
     */
    public function setArticle(\hostoo\GestionBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \hostoo\GestionBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }

}