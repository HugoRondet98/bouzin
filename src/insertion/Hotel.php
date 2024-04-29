<?php

$ic = '';
$ih = 'active';
$ir = '';
$is = '';

use App\Classes\Hotel;
use App\Classes\Services;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;

include 'header.php';

require_once dirname(__DIR__) . "/../bootstrap.php";
require_once dirname(__FILE__) . "/jsonToPhp/index.php";
$serviceRepository = $entityManager->getRepository(Services::class);
$tableService = $serviceRepository->findAll();
 
$rand1 = rand(0,count($tableService)-1);
$rand2 = rand(0,count($tableService)-1);
$rand3 = rand(0,count($tableService)-1);
$rand4 = rand(0,count($tableService)-1);
while ($rand2 == $rand1) {
    $rand2 = rand(0,count($tableService)-1);
}
while ($rand3 == $rand1 || $rand3 == $rand2) {
    $rand3 = rand(0,count($tableService)-1);
}
while ($rand4 == $rand1 || $rand4 == $rand2 || $rand4 == $rand3) {
    $rand4 = rand(0,count($tableService)-1);
}
 
$tableRandomService = [$tableService[$rand1], $tableService[$rand2], $tableService[$rand3], $tableService[$rand4]];
 
$collectService = new ArrayCollection($tableRandomService);
 
// foreach ($dataPhpHotel as $object) {
//     $hot = new Hotel($object->nom, $object->numero_telephone, $object->nom_rue, $object->code_postal, $object->ville);
//     $hot->setServiceList($collectService);
//     $entityManager->persist($hot);  
// }
// $entityManager->flush();

include '../view/footer.php';