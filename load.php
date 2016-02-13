<?php

use Doctrine\Common\DataFixtures\Loader;
use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;

$entityManager = require 'bootstrap.php';

$loader = new Loader();
$purger = new ORMPurger();
$executor = new ORMExecutor($entityManager, $purger);

$loader->loadFromDirectory(__DIR__ . '/src/DataFixtures');
$executor->execute($loader->getFixtures());
