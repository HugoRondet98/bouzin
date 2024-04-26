<?php

use App\Classes\Services;
use App\Classes\Hotel;
use App\Classes\ServicesHotel;
use Doctrine\ORM\EntityManager;

// include 'header.php';

require_once dirname(__DIR__)."/../bootstrap.php";
require_once dirname(__FILE__)."/jsonToPhp/index.php";

$categoriesRepository = $entityManager->getRepository(ServicesHotel::class);
$tableServicesHotel = $categoriesRepository->findAll();


foreach ($tableServicesHotel as $object){
    $serv = new ServicesHotel($object->hotel_id, $object->services_id);
    var_dump($serv);
    // $entityManager->persist($serv);
}
// $entityManager->flush();
