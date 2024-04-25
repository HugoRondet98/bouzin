<?php

use App\Classes\Hotel;
use Doctrine\ORM\EntityManager;

require_once dirname(__DIR__)."/../bootstrap.php";
require_once dirname(__FILE__)."/jsonToPhp/index.php";

foreach ($dataPhpHotel as $object) {
    $hot = new Hotel();
    $hot->setName($object->nom);
    $hot->setPhoneNumber($object->numero_telephone);
    $hot->setStreetName($object->nom_rue);
    $hot->setPostalCode($object->code_postal);
    $hot->setCity($object->ville);
    $entityManager->persist($hot);
}
    $entityManager->flush();

