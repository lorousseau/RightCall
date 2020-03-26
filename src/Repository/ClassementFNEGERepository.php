<?php

namespace App\Repository;

use App\Entity\Classementfnege;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DBALException;

/**
 * @method ClassementFNEGE|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClassementFNEGE|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClassementFNEGE[]    findAll()
 * @method ClassementFNEGE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassementFNEGERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClassementFNEGE::class);
    }

    public function afficheClassementFNEGE(): array
    {
        $query = $this->getEntityManager()->getConnection();

        $sql = 'SELECT * FROM classementFNEGE';
        try {
            $stmt = $query->prepare($sql);
        } catch (DBALException $e) {
            echo $e->getMessage();
        }
        $stmt->execute();

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    /*
    public function findOneBySomeField($value): ?ClassementFNEGE
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
