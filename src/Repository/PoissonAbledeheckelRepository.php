<?php

namespace App\Repository;

use App\Entity\PoissonAbledeheckel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PoissonAbledeheckel>
 *
 * @method PoissonAbledeheckel|null find($id, $lockMode = null, $lockVersion = null)
 * @method PoissonAbledeheckel|null findOneBy(array $criteria, array $orderBy = null)
 * @method PoissonAbledeheckel[]    findAll()
 * @method PoissonAbledeheckel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PoissonAbledeheckelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PoissonAbledeheckel::class);
    }

    public function add(PoissonAbledeheckel $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PoissonAbledeheckel $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PoissonAbledeheckel[] Returns an array of PoissonAbledeheckel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PoissonAbledeheckel
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
