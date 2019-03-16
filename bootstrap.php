<?php

require_once __DIR__ . '/vendor/autoload.php';
\Engine\Database::getInstance();

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [__DIR__ . "/src/Entity"];
$isDevMode = false;

$env = \Engine\EnvResolver::resolve();

$dbParams = [
    'driver' => 'pdo_mysql',
    'user' => $env['MYSQL_USER'],
    'password' => $env['MYSQL_PASSWORD'],
    'dbname' => $env['MYSQL_DATABASE'],
    'host' => $env['MYSQL_HOST']
];

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($dbParams, $config);
