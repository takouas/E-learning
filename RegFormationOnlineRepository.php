<?php

namespace App\Repository;

use App\Entity\RegFormationOnline;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RegFormationOnline|null find($id, $lockMode = null, $lockVersion = null)
 * @method RegFormationOnline|null findOneBy(array $criteria, array $orderBy = null)
 * @method RegFormationOnline[]    findAll()
 * @method RegFormationOnline[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegFormationOnlineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RegFormationOnline::class);
    }

    // /**
    //  * @return RegFormationOnline[] Returns an array of RegFormationOnline objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RegFormationOnline
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
