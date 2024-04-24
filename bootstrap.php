<?php
<<<<<<< HEAD
=======
require_once "vendor/autoload.php";
>>>>>>> origin/main

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
<<<<<<< HEAD
 
=======

>>>>>>> origin/main
// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__."/src"),
    isDevMode: true,
);
<<<<<<< HEAD
 
=======

>>>>>>> origin/main
// configuring the database connection
$connection = DriverManager::getConnection(
[
    'driver'    => 'pdo_mysql',
    'user'      => 'root',
    'password'  => '',
    'dbname'    => 'nomDeLaBase',
    'port'      => 3306
  ],
  $config
);
<<<<<<< HEAD
 
// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);
=======

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);
>>>>>>> origin/main
