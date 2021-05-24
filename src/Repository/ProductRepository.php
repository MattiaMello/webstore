<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->orWhere('p.uid LIKE :t_uid')
            ->setParameter('t_uid', '%' . $value . '%')
            ->orWhere('p.price LIKE :t_price')
            ->setParameter('t_price', '%' . $value . '%')
            ->orWhere('p.final_price LIKE :t_finalPrice')
            ->setParameter('t_finalPrice', '%' . $value . '%')
            ->orWhere('p.code LIKE :t_code')
            ->setParameter('t_code', '%' . $value . '%')
            ->orWhere('p.status LIKE :t_status')
            ->setParameter('t_status', '%' . $value . '%')
            ->orderBy("p.id", "ASC")
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

    /*
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
