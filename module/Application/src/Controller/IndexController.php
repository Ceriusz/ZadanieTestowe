<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Doctrine\ORM\EntityManager;
use Application\Entity\City;
use DoctrineORMModule\Paginator\Adapter\DoctrinePaginator as DoctrineAdapter;
use Doctrine\ORM\Tools\Pagination\Paginator as ORMPaginator;
use Zend\Paginator\Paginator;
use Application\Service\FieldExtractorService;
use Application\Service\PrepareWhereService;

class IndexController extends AbstractActionController
{

    private $em;
    
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    
    public function citiesAction()
    {
        $orderBy = 'c.'.$this->params()->fromQuery('orderBy', 'name');
        $orderByView = $this->params()->fromQuery('orderBy', 'name');
        $order = $this->params()->fromQuery('order', 'asc');
        
        if($this->getRequest()->isPost()) 
        {
          $data = $this->params()->fromPost();
        }
        else
        {
            $data = array();
        }
        
        $preparer = new PrepareWhereService();
        $where = $preparer->prepareWhere($data);
        
        $page = $this->params()->fromQuery('page', 1);
        $query = $this->em->getRepository(City::class)->findCities($orderBy, $order, $where);
      
        $adapter = new DoctrineAdapter(new ORMPaginator($query, false));
        $paginator = new Paginator($adapter);
        $paginator->setDefaultItemCountPerPage(10);        
        $paginator->setCurrentPageNumber($page);
        
        $extractor = new FieldExtractorService();
        
        return [
            'cities' => $paginator,
            'fields' => $extractor->extractFields(City::class),
            'page' => $page,
            'orderBy' => $orderByView,
            'order' => $order,
        ];
    }
}
