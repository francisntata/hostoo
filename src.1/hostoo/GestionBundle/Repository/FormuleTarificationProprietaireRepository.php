<?php

namespace hostoo\GestionBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * FormuleTarificationProprietaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FormuleTarificationProprietaireRepository extends EntityRepository
{
    public function groupeFormule($proprietaire)
    {
        $qb=$this->createQueryBuilder('a');
        $qb->select('f.id as id, f.nom as nom, count(a.acte) As lesactes')
            ->join('a.formule','f')
            ->where('a.societe = :prop')
            ->setParameter('prop',$proprietaire)
            ->groupBy('f');
        return $qb->getQuery()->getResult();

    }

    public function lesFormulesSociete($soc)
    {
        $req=$this->createQueryBuilder('a');
        $req->select('f.id as id, f.nom as myf, COUNT(p) as nbr')
            ->distinct(1)
            ->join('a.formule','f')
            ->join('a.societe','s')
            ->join('s.patients','p')
            ->where('a.societe = :soc AND a.formule =f.id')
            ->setParameter('soc',$soc)
            ->andWhere('p.formule = a.formule')
            ->groupBy('a.formule');
        return $req->getQuery()->getResult();
    }

}
