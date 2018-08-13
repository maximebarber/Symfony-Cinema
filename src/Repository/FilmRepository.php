<?php

namespace App\Repository;

use App\Entity\Film;
//use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
//Ne nécessite pas le constructor
use Doctrine\ORM\EntityRepository;

class FilmRepository extends EntityRepository
{
    public function getFilmsOrderByTitre() 
    {
        $qb = $this->createQueryBuilder('f')
                   ->orderBy('f.titreFilm', 'ASC')
                   ->getQuery()
                   ->getResult();
        return $qb;
    }

    //méthode identique à ci-dessus
    public function getFilmsOrderByTitreCustom()
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery
        (
            'SELECT f
             FROM App\Entity\Film f
             ORDER BY f.titreFilm ASC'
        );

        return $query->execute();
    }
}