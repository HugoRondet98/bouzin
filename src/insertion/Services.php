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

foreach ($dataPhpServices as $object){
    $serv = new Services($object->name, $object->description);
    var_dump($serv);
    $entityManager->persist($serv);
}
$entityManager->flush();
