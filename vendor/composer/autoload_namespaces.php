<?php

// autoload_namespaces.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Symfony\\Component\\EventDispatcher\\' => array($vendorDir . '/symfony/event-dispatcher'),
    'Symfony\\Component\\DependencyInjection\\' => array($vendorDir . '/symfony/dependency-injection'),
    'Psr\\Log\\' => array($vendorDir . '/psr/log'),
    'Civi\\' => array($baseDir . '/..', $baseDir . '/tests/phpunit'),
    'CRM_' => array($baseDir . '/..'),
);
