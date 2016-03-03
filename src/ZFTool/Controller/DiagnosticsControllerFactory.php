<?php

namespace ZFTool\Controller;

use Zend\Mvc\Controller\ControllerManager;
use Zend\ServiceManager\ServiceLocatorInterface;

class DiagnosticsControllerFactory
{
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        if ($serviceLocator instanceof ControllerManager && method_exists($serviceLocator, 'getServiceLocator')) {
            $serviceLocator = $serviceLocator->getServiceLocator();
        }
        return new DiagnosticsController($serviceLocator);
    }
}