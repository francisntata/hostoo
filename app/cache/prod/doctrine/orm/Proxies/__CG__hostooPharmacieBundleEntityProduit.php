<?php

namespace Proxies\__CG__\hostoo\PharmacieBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Produit extends \hostoo\PharmacieBundle\Entity\Produit implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'id', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'nom', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'origine', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'grammage', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'boite', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'plaquette', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'unite', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'alert', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'prix', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'dateexp', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'categorie', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'nature', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'formule', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'stocks', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'stocktot'];
        }

        return ['__isInitialized__', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'id', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'nom', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'origine', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'grammage', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'boite', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'plaquette', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'unite', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'alert', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'prix', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'dateexp', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'categorie', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'nature', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'formule', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'stocks', '' . "\0" . 'hostoo\\PharmacieBundle\\Entity\\Produit' . "\0" . 'stocktot'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Produit $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrammage($grammage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrammage', [$grammage]);

        return parent::setGrammage($grammage);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrammage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrammage', []);

        return parent::getGrammage();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateexp($dateexp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateexp', [$dateexp]);

        return parent::setDateexp($dateexp);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateexp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateexp', []);

        return parent::getDateexp();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie(\hostoo\PharmacieBundle\Entity\Cattheura $categorie = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', [$categorie]);

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', []);

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setNature(\hostoo\PharmacieBundle\Entity\Nature $nature = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNature', [$nature]);

        return parent::setNature($nature);
    }

    /**
     * {@inheritDoc}
     */
    public function getNature()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNature', []);

        return parent::getNature();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function addFormule(\hostoo\SanteBundle\Entity\Formule $formule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFormule', [$formule]);

        return parent::addFormule($formule);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFormule(\hostoo\SanteBundle\Entity\Formule $formule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFormule', [$formule]);

        return parent::removeFormule($formule);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormule', []);

        return parent::getFormule();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrigine($origine)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrigine', [$origine]);

        return parent::setOrigine($origine);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrigine()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrigine', []);

        return parent::getOrigine();
    }

    /**
     * {@inheritDoc}
     */
    public function addStock(\hostoo\PharmacieBundle\Entity\Stock $stocks)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addStock', [$stocks]);

        return parent::addStock($stocks);
    }

    /**
     * {@inheritDoc}
     */
    public function removeStock(\hostoo\PharmacieBundle\Entity\Stock $stocks)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeStock', [$stocks]);

        return parent::removeStock($stocks);
    }

    /**
     * {@inheritDoc}
     */
    public function getStocks()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStocks', []);

        return parent::getStocks();
    }

    /**
     * {@inheritDoc}
     */
    public function setStocktot(\hostoo\PharmacieBundle\Entity\StockTot $stocktot = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStocktot', [$stocktot]);

        return parent::setStocktot($stocktot);
    }

    /**
     * {@inheritDoc}
     */
    public function getStocktot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStocktot', []);

        return parent::getStocktot();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlaquette($plaquette)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlaquette', [$plaquette]);

        return parent::setPlaquette($plaquette);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlaquette()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlaquette', []);

        return parent::getPlaquette();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnite($unite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnite', [$unite]);

        return parent::setUnite($unite);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnite', []);

        return parent::getUnite();
    }

    /**
     * {@inheritDoc}
     */
    public function setBoite(\hostoo\SanteBundle\Entity\Emballage $boite = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBoite', [$boite]);

        return parent::setBoite($boite);
    }

    /**
     * {@inheritDoc}
     */
    public function getBoite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoite', []);

        return parent::getBoite();
    }

    /**
     * {@inheritDoc}
     */
    public function enDetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'enDetails', []);

        return parent::enDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlert($alert)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlert', [$alert]);

        return parent::setAlert($alert);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlert()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlert', []);

        return parent::getAlert();
    }

}