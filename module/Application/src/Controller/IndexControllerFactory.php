<?php
namespace Application\Controller;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Application\Controller\IndexController;

class IndexControllerFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, Array $options = null) {    

		return new IndexController(
            $container->get(\Doctrine\ORM\EntityManager::class)
        );
    }

}