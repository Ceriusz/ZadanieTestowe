<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM\EntityManager;
use Application\Entity\City;
use Application\Entity\CountryLanguage;
use Zend\View\Model\JsonModel;
use DoctrineORMModule\Paginator\Adapter\DoctrinePaginator as DoctrineAdapter;
use Doctrine\ORM\Tools\Pagination\Paginator as ORMPaginator;
use Zend\Paginator\Paginator;

class IndexController extends AbstractActionController
{

    private $em;
    
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    
    public function indexAction()
    {
        return [
            'cities' => $this->em->getRepository(City::class)->find(1),
        ];
    }
    
    public function citiesAction()
    {
        $page = $this->params()->fromQuery('page', 1);
        $query = $this->em->getRepository(City::class)->findCities();
        
        $adapter = new DoctrineAdapter(new ORMPaginator($query, false));
        $paginator = new Paginator($adapter);
        $paginator->setDefaultItemCountPerPage(10);        
        $paginator->setCurrentPageNumber($page);
        
        return [
            'cities' => $paginator,
            'fields' => $this->extractFields(City::class),
        ];
    }

    public function ajaxGetCitiesAction()
    {
        return new JsonModel($this->jsonExtractFields($this->em->getRepository(City::class)->findBy([], ['name' => 'desc'], 10)));
    }
    
    private function extractFields($className)
    {
        $classMethods = get_class_methods($className);

        foreach ($classMethods as $classMethod)
        {
            if ((strpos($classMethod, 'get') > -1) && $classMethod != 'getId')
            {
                $fields['methods'][] = $classMethod;
                $fields['headers'][] = substr($classMethod, 3);
            }
        }

        return $fields;
    }
    
    private function jsonExtractFields($objectArray)
    {
        $fields = $this->extractFields(get_class($objectArray[0]));
        foreach ($objectArray as $object)
        {
            foreach ($fields['methods'] as $field)
            {
                $jsonExtractFields[$object->getId()][substr($field, 3)] = $object->$field(); 
            }
        }
       
        return $jsonExtractFields;
    }
}
