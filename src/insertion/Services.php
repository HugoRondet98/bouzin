<?php
$ic='';
$ih='';
$ir='';
$is='active';
use App\Classes\Services;
use Doctrine\ORM\EntityManager;

include 'header.php';
require_once dirname(__DIR__)."/../bootstrap.php";
require_once dirname(__FILE__)."/jsonToPhp/index.php";

// foreach ($dataPhpCategories as $object) {
//     $cat = new Categories();
//     $cat->setName($object->name);
//     $cat->setDescriptionCategorie($object->description);
//     $entityManager->persist($cat);
// }
// $entityManager->flush();
