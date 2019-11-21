<?php

namespace App\Repository;

use App\Entity\TCustomer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TCustomer|null find($id, $lockMode = null, $lockVersion = null)
 * @method TCustomer|null findOneBy(array $criteria, array $orderBy = null)
 * @method TCustomer[]    findAll()
 * @method TCustomer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TCustomerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TCustomer::class);
    }

    // /**
    //  * @return TCustomer[] Returns an array of TCustomer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TCustomer
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
