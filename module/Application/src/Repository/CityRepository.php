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
            ->orderBy('c.name', 'ASC');

        return $queryBuilder->getQuery();
    }
}