<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace MusicAlbum\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use MusicAlbum\Entity\Album;
use Doctrine;

class IndexController extends AbstractActionController
{
    /**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager
     */
    private $entityManager;

    // Constructor method is used to inject dependencies to the controller.
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function indexAction()
    {
        return new ViewModel();
    }

    public function loginAction()
    {
        return new ViewModel();
    }

    public function registrationAction()
    {
        return new ViewModel();
    }
}
