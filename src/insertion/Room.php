<?php
$ic='';
$ih='';
$ir='active';
$is='';
use App\Classes\Categories;
use App\Classes\Hotel;
use App\Classes\Room;

require_once dirname(__DIR__) . "/../bootstrap.php";
require_once dirname(__FILE__) . "/jsonToPhp/index.php";
include 'header.php';
$hotelRepository = $entityManager->getRepository(Hotel::class);
$tableHotel = $hotelRepository->findAll();

$categoriesRepository = $entityManager->getRepository(Categories::class);
$tableCategories = $categoriesRepository->findAll();
//var_dump($tableCategories);

// foreach ($tableHotel as $obj) {
//     foreach ($dataPhpRoom as $object) {
//         $randomId = rand(0, count($tableCategories)-1);
//         $cat = $tableCategories[$randomId];
//         $rompich = new Room($object->name, $object->numero, $cat, $obj);
//         $entityManager->persist($rompich);
//     }
// }
// $entityManager->flush();
