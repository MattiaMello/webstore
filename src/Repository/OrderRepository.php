<?php

namespace App\Repository;

use App\Entity\Order;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Order|null find($id, $lockMode = null, $lockVersion = null)
 * @method Order|null findOneBy(array $criteria, array $orderBy = null)
 * @method Order[]    findAll()
 * @method Order[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Order::class);
    }

    // /**
    //  * @return Order[] Returns an array of Order objects
    //  */
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->orWhere('p.orderID LIKE :t_oId')
            ->setParameter('t_oId', '%' . $value . '%')

            ->orWhere('p.total LIKE :t_tot')
            ->setParameter('t_tot', '%' . $value . '%')

            ->orWhere('p.orderDate LIKE :t_oDate')
            ->setParameter('t_oDate', '%' . $value . '%')

            ->orWhere('p.status LIKE :t_status')
            ->setParameter('t_status', '%' . $value . '%')

            ->orWhere('p.locale LIKE :t_locale')
            ->setParameter('t_locale', '%' . $value . '%')

            ->orderBy('p.id', 'ASC')
            // ->setMaxResults(10)
            ->getQuery()
            ->getResult();
    }

    /*
    public function findOneBySomeField($value): ?Order
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
