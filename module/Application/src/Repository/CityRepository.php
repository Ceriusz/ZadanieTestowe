<?php
namespace Application\Repository;

use Doctrine\ORM\EntityRepository;
use Application\Entity\City;

class CityRepository extends EntityRepository
{
    public function findCities($orderBy = 'c.name', $order = 'asc', $where = '')
    {
        $queryBuilder = $this->prepareQueryBuilder();

        $queryBuilder   ->select('c')
                        ->from(City::class, 'c')
                        ->leftJoin('c.country', 'co')
                        ->leftJoin('co.countryLanguage', 'cl');

        if($where != '')
        {
            $queryBuilder->where($where);
        }
        
        $queryBuilder   ->orderBy($orderBy, $order);

        return $queryBuilder->getQuery();
    }
    
    protected function prepareQueryBuilder()
    {
        $entityManager = $this->getEntityManager();

        $queryBuilder = $entityManager->createQueryBuilder();
        
        return $queryBuilder;
    }
}