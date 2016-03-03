<?php

namespace ZFTool\Controller;

use Zend\ServiceManager\ServiceLocatorInterface;

class DiagnosticsControllerFactory
{
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        return new DiagnosticsController($serviceLocator);
    }
}