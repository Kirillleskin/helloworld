<?php
/**
 * Created by PhpStorm.
 * User: Kirill
 * Date: 01.03.2017
 * Time: 21:35
 */

namespace MusicAlbum\Controller;


use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class IndexControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container,
                             $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');

        // Instantiate the controller and inject dependencies
        return new IndexController($entityManager);
    }
}