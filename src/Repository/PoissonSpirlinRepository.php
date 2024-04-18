<?php

namespace App\Repository;

use App\Entity\PoissonSpirlin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PoissonSpirlin>
 *
 * @method PoissonSpirlin|null find($id, $lockMode = null, $lockVersion = null)
 * @method PoissonSpirlin|null findOneBy(array $criteria, array $orderBy = null)
 * @method PoissonSpirlin[]    findAll()
 * @method PoissonSpirlin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PoissonSpirlinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PoissonSpirlin::class);
    }

    public function add(PoissonSpirlin $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PoissonSpirlin $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PoissonSpirlin[] Returns an array of PoissonSpirlin objects
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

//    public function findOneBySomeField($value): ?PoissonSpirlin
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
