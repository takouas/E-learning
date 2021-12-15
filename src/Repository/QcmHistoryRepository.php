<?php

namespace App\Repository;

use App\Entity\QcmHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QcmHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method QcmHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method QcmHistory[]    findAll()
 * @method QcmHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QcmHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QcmHistory::class);
    }

    // /**
    //  * @return QcmHistory[] Returns an array of QcmHistory objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QcmHistory
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
