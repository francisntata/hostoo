<?php

namespace hostoo\SanteBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CaisseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CaisseRepository extends EntityRepository
{
    public function totalCaisseCDF()
    {
        $qb=$this->createQueryBuilder('a');
        $qb->join('a.episode','b')
            ->join('b.patient','c')
            ->join('c.societe','d')
            ->join('d.convention','e')
            ->join('e.tconvention','f');
        $qb->select('SUM(a.montantcdf) as cdf')
            ->where('f.id = 1');
        return $qb->getQuery()->getSingleResult();
    }

    public function totalCaisseCDFP()
    {
        $qb=$this->createQueryBuilder('a');
        $qb->join('a.episode','b')
            ->join('b.patient','c')
            ->join('c.societe','d')
            ->join('d.convention','e')
            ->join('e.tconvention','f');
        $qb->select('SUM(a.montantcdf) as cdf')
            ->where('f.id = 2');
        return $qb->getQuery()->getSingleResult();
    }

    public function totalCaisseJournalierUSD($user)
    {
        $qb=$this->createQueryBuilder('a');

        $qb->select('SUM(a.montantusd) as usd')
            ->join('a.percepteur','perc')
            ->where('a.datecaisse LIKE :datec')
            ->andWhere('perc.id = :user')
            ->setParameter('datec',date('Y-m-d').'%')->setParameter('user',$user);
        return $qb->getQuery()->getSingleResult();
    }

    public function totalCaisseJournalierCDF($user)
    {
        $qb=$this->createQueryBuilder('a');

        $qb->select('SUM(a.montantcdf) as cdf')
            ->join('a.percepteur','perc')
            ->where('a.datecaisse LIKE :datec')
            ->andWhere('perc.id = :user')
            ->setParameter('datec',date('Y-m-d').'%')
            ->setParameter('user',$user);
        return $qb->getQuery()->getSingleResult();
    }

    public function totalCaisseJournalierCDFP()
    {
        $qb=$this->createQueryBuilder('a');
        $qb->join('a.episode','b')
            ->join('b.patient','c')
            ->join('c.societe','d')
            ->join('d.convention','e')
            ->join('e.tconvention','f');
        $qb->select('SUM(a.montantcdf) as cdf')
            ->where('a.datecaisse LIKE :datec')
            ->andWhere('f.id = 2')
            ->setParameter('datec',date('Y-m-d').'%');
        return $qb->getQuery()->getSingleResult();
    }

    public function totalCaisseUSD()
    {
        $qb=$this->createQueryBuilder('a');
        $qb->join('a.episode','b')
            ->join('b.patient','c')
            ->join('c.societe','d')
            ->join('d.convention','e')
            ->join('e.tconvention','f');
        $qb->select('SUM(a.montantusd) as usd')
            ->where('f.id = 1');
        return $qb->getQuery()->getSingleResult();
    }

    public function totalCaisseUSDP()
    {
        $qb=$this->createQueryBuilder('a');
        $qb->join('a.episode','b')
            ->join('b.patient','c')
            ->join('c.societe','d')
            ->join('d.convention','e')
            ->join('e.tconvention','f');
        $qb->select('SUM(a.montantusd) as usd')
            ->where('f.id = 2');
        return $qb->getQuery()->getSingleResult();
    }

    public function totalCaisseUSDC()
    {
        $qb=$this->createQueryBuilder('a');
        $qb->select('SUM(a.montantusd) as usd')
            ->where('a.type = :mytype')
            //->andWhere('f.id = 2')
            ->setParameter('mytype',0);
        return $qb->getQuery()->getSingleResult();
    }
    public function totalCaisseMoisUSDC()
    {
        $qb=$this->createQueryBuilder('a');
        $qb->select('SUM(a.montantusd) as usd')
            ->where('a.datecaisse LIKE :datec AND a.type = :mytype')
            //->andWhere('f.id = 2')
            ->setParameter('mytype',0)
            ->setParameter('datec',date('Y-m').'%');
        return $qb->getQuery()->getSingleResult();
    }
    public function totalCaisseMoisUSDP()
    {
        $qb=$this->createQueryBuilder('a');
        $qb->select('SUM(a.montantusd) as usd')
            ->where('a.datecaisse LIKE :datec AND a.type = :mytype')
            //->andWhere('f.id = 2')
            ->setParameter('mytype',1)
            ->setParameter('datec',date('Y-m').'%');
        return $qb->getQuery()->getSingleResult();
    }
    public function totalCaisseJrUSD()
    {
        $qb=$this->createQueryBuilder('a');
        $qb->select('SUM(a.montantusd) as usd')
            ->where('a.datecaisse LIKE :datec AND a.type = :mytype')
            ->setParameter('mytype',1)
            ->setParameter('datec',date('Y-m-d').'%');
        return $qb->getQuery()->getSingleResult();
    }
    public function totalCaisseJrUSDC()
    {
        $qb=$this->createQueryBuilder('a');
        $qb->select('SUM(a.montantusd) as usd')
            ->where('a.datecaisse LIKE :datec AND a.type = :mytype')
            ->setParameter('mytype',0)
            ->setParameter('datec',date('Y-m-d').'%');
        return $qb->getQuery()->getSingleResult();
    }

    public function sommeNonPercues()
    {
        $qb=$this->createQueryBuilder('a');
        $qb->select('SUM(a.montantusd) as usd, (b.nom) as percepteur')
            ->join('a.percepteur','b')
            ->where('a.remis = :mytype')
            ->setParameter('mytype',0)
            ->groupBy('a.percepteur');
        return $qb->getQuery()->getResult();
    }

    public function checkEpi()
    {

    }

    /**
     * @param $mois
     * @param $annee
     * @return array
     */
    public function recettesConsultation($mois, $annee)
    {
            $qb=$this->createQueryBuilder('a');
            $qb->select('SUM(a.montantusd) as usd, SUM(a.montantcdf) as cdf')
                ->join('a.facture','fac')
                ->join('fac.commandes','cmd')
                ->join('cmd.tarifs','tar')
                ->join('tar.actes','acte')
                ->join('acte.categories','cat')
                ->where('cat.id = :mytag')
                ->andWhere('a.datecaisse LIKE :daterec')
                ->setParameter('mytag',1)
                ->setParameter('daterec',$annee.'-'.$mois.'%')
                ->groupBy('cat.id')
            ;
            return $qb->getQuery()->getResult();
    }

    public function recettesImagerie($mois, $annee){
        $qb=$this->createQueryBuilder('a');
        $qb->select('SUM(a.montantusd) as usd, SUM(a.montantcdf) as cdf')
            ->join('a.facture','fac')
            ->join('fac.commandes','cmd')
            ->join('cmd.tarifs','tar')
            ->join('tar.actes','acte')
            ->join('acte.categories','cat')
            ->where('cat.id = :mytag')
            ->andWhere('a.datecaisse LIKE :daterec')
            ->setParameter('mytag',4)
            ->setParameter('daterec',$annee.'-'.$mois.'%')
            ->groupBy('cat.id')
        ;
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function recettesLaboratoire($mois, $annee){
        $qb=$this->createQueryBuilder('a');
        $qb->select('SUM(a.montantusd) as usd, SUM(a.montantcdf) as cdf')
            ->join('a.facture','fac')
            ->join('fac.commandes','cmd')
            ->join('cmd.tarifs','tar')
            ->join('tar.actes','acte')
            ->join('acte.categories','cat')
            ->where('cat.id = :mytag')
            ->andWhere('a.datecaisse LIKE :daterec')
            ->setParameter('mytag',3)
            ->setParameter('daterec',$annee.'-'.$mois.'%')
            ->groupBy('cat.id')
        ;
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function recettesAutres($mois, $annee){
        $qb=$this->createQueryBuilder('a');
        $qb->select('SUM(a.montantusd) as usd, SUM(a.montantcdf) as cdf')
            ->join('a.facture','fac')
            ->join('fac.commandes','cmd')
            ->join('cmd.tarifs','tar')
            ->join('tar.actes','acte')
            ->join('acte.categories','cat')
            ->where('cat.id = :mytag')
            ->andWhere('a.datecaisse LIKE :daterec')
            ->setParameter('mytag',3)
            ->setParameter('daterec',$annee.'-'.$mois.'%')
            ->groupBy('cat.id')
        ;
        return $qb->getQuery()->getOneOrNullResult();;
    }
}
