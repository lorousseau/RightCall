<?php

namespace App\Repository;

use App\Entity\ClassementHCERES;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DBALException;

/**
 * @method ClassementHCERES|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClassementHCERES|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClassementHCERES[]    findAll()
 * @method ClassementHCERES[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassementHCERESRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClassementHCERES::class);
    }

    public function afficheClassementHCERES(): array
    {
        $query = $this->getEntityManager()->getConnection();

        $sql = 'SELECT * FROM classement_hceres order by classement_revue';
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
    public function findOneBySomeField($value): ?ClassementHCERES
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
