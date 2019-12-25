<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.WM7O2D6' shared service.

return $this->privates['.service_locator.WM7O2D6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'arrayJson1' => ['privates', 'App\\Service\\InputPhpJsonFile', 'getInputPhpJsonFileService.php', true],
    'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService.php', true],
], [
    'arrayJson1' => 'App\\Service\\InputPhpJsonFile',
    'paginator' => '?',
]);