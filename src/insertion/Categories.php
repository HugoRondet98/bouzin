<?php

use App\Classes\Categories;
use Doctrine\ORM\EntityManager;

require_once dirname(__DIR__) . "/../bootstrap.php";
require_once dirname(__FILE__) . "/jsonToPhp/index.php";


// foreach ($dataPhpCategories as $object) {
//     $cat = new Categories();
//     $cat->setName($object->name);
//     $cat->setDescriptionCategorie($object->description);
//     $entityManager->persist($cat);
// }
// $entityManager->flush();

