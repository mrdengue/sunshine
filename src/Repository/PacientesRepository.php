<?php

namespace App\Repository;

use App\Entity\Pacientes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pacientes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pacientes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pacientes[]    findAll()
 * @method Pacientes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PacientesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pacientes::class);
    }

    // /**
    //  * @return Pacientes[] Returns an array of Pacientes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pacientes
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
