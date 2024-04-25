<?php

use App\Classes\Categories;
use App\Classes\Hotel;
use App\Classes\Room;
use Doctrine\ORM\EntityManager;

require_once dirname(__DIR__)."/../bootstrap.php";
require_once dirname(__FILE__)."/jsonToPhp/index.php";

// var_dump($dataPhpRoom);

echo 'Insertion des chambres du fichier json dans la BDD';

$hotelRepository = $entityManager->getRepository(Hotel::class);
$tableHotel = $hotelRepository->findAll();

$categoriesRepository = $entityManager->getRepository(Categories::class);
$tableCategories = $categoriesRepository->findAll();

foreach ($tableHotel as $hot) {
    foreach ($dataPhpRoom as $object){
        $randomId = rand(0, count($tableCategories)-1);
        $cat = $tableCategories[$randomId];
        $rompich = new Room($object->name, $object->numero, $cat, $hot);
        $entityManager->persist($rompich);
    }
}
$entityManager->flush();
