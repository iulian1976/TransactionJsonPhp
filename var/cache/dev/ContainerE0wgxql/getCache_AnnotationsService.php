<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cache.annotations' shared service.

include_once $this->targetDirs[3].'\\vendor\\psr\\cache\\src\\CacheItemPoolInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\AdapterInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache-contracts\\CacheInterface.php';
include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\ResettableInterface.php';
include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\AbstractTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\AbstractAdapterTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache-contracts\\CacheTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\ContractsTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\AbstractAdapter.php';

return $this->privates['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('9Zhef11Rg-', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
