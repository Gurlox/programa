<?php

namespace Repository;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function countAllProducts()
    {
        return $this
            ->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findAllUnavailable()
    {
        return $this
            ->createQueryBuilder('p')
            ->where('p.isAvailable = false')
            ->getQuery()
            ->getResult();
    }

    public function findAllByNameLike(string $wildcard)
    {
        return $this
            ->createQueryBuilder('p')
            ->where('p.name LIKE :wildcard')
            ->setParameter('wildcard', '%' . $wildcard . '%')
            ->getQuery()
            ->getResult();
    }
}
