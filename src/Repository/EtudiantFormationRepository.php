<?php

namespace App\Repository;

use App\Entity\EtudiantFormation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EtudiantFormation|null find($id, $lockMode = null, $lockVersion = null)
 * @method EtudiantFormation|null findOneBy(array $criteria, array $orderBy = null)
 * @method EtudiantFormation[]    findAll()
 * @method EtudiantFormation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtudiantFormationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EtudiantFormation::class);
    }

    // /**
    //  * @return EtudiantFormation[] Returns an array of EtudiantFormation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EtudiantFormation
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
