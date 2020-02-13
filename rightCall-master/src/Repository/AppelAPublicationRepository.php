<?php

namespace App\Repository;

use App\Entity\AppelAPublication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AppelAPublication|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppelAPublication|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppelAPublication[]    findAll()
 * @method AppelAPublication[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppelAPublicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppelAPublication::class);
    }

    // /**
    //  * @return AppelAPublication[] Returns an array of AppelAPublication objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AppelAPublication
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
