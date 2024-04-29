<?php

use App\Classes\Hotel;
use App\Classes\Services;
use Doctrine\Common\Collections\ArrayCollection;

require_once dirname(__DIR__)."/../bootstrap.php";
require_once dirname(__FILE__)."/jsonToPhp/index.php";

// echo 'Insertion des services du fichier json dans la BDD';

// foreach ($dataPhpServices as $object){
//     $serv = new Services($object->name, $object->description);
//     $entityManager->persist($serv);
// }
// $entityManager->flush();

