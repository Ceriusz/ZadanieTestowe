<?php
namespace Application\Repository;

use Doctrine\ORM\EntityRepository;
use Application\Entity\City;

class CityRepository extends EntityRepository
{
    public function findCities()
    {
        $entityManager = $this->getEntityManager();

        $queryBuilder = $entityManager->createQueryBuilder();

        $queryBuilder->select('c')
            ->from(City::class, 'c')
//            ->where('p.status = ?1')
            ->orderBy('c.name', 'DESC');

        return $queryBuilder->getQuery();
    }
}