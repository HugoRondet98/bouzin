<?php
$ic='';
$ih='';
$ir='';
$is='active';
use App\Classes\Services;
use App\Classes\Hotel;

use Doctrine\ORM\EntityManager;
include 'header.php';

require_once dirname(__DIR__)."/../bootstrap.php";
require_once dirname(__FILE__)."/jsonToPhp/index.php";

$serviceRepository = $entityManager->getRepository(Services::class);
$tableServices =$serviceRepository->findAll();

$hotelRepository = $entityManager->getRepository(Hotel::class);
$tableHotel = $hotelRepository->findAll();


//var_dump($tableServices);

//foreach ($tableServices as $object){
   // $serv = new Services($object->name, $object->description);

   //$entityManager->persist($serv);
//}
//$entityManager->flush();
