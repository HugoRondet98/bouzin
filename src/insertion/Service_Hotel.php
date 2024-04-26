<?php
 
use App\Classes\Hotel;

use App\Classes\Services;
 
Require dirname(__DIR__).'/../bootstrap.php';
require_once dirname(__FILE__)."/jsonToPhp/index.php";
 
$hotelRepository = $entityManager->getRepository(Hotel::class);
$tableHotel = $hotelRepository->findAll();
 
$serviceRepository = $entityManager->getRepository(Services::class);
$tableServices = $serviceRepository->findAll();
var_dump($tableServices);

