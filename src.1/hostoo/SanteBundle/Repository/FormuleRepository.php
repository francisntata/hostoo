<?php

namespace hostoo\SanteBundle\Repository;

/**
 * FormuleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FormuleRepository extends \Doctrine\ORM\EntityRepository
{
    public function nbreParFormule()
    {
        $qb=$this->createQueryBuilder('a');
        $qb->select('a')
            ->orderBy('a.id');
        return $qb->getQuery()->getResult();
    }
}