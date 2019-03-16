<?php

namespace Repository;

use Doctrine\ORM\EntityRepository;
use Entity\Category;

class CategoryRepository extends EntityRepository
{
    public function countProducts(Category $category)
    {
        return $this
            ->createQueryBuilder('c')
            ->select('COUNT(p.id)')
            ->leftJoin('c.products', 'p')
            ->where('c.id = :category')
            ->setParameter('category', $category)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getProductsWithinCategoryASC(Category $category)
    {
        return $this
            ->createQueryBuilder('c')
            ->leftJoin('c.products', 'p')
            ->where('c.id = :category')
            ->setParameter('category', $category)
            ->orderBy('p.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
