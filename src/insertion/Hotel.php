<?php

use App\Classes\Hotel;

require_once dirname(__DIR__)."/../bootstrap.php";
require_once dirname(__FILE__)."/jsonToPhp/index.php";

echo 'Insertion des hôtels du fichier json dans la BDD';

foreach ($dataPhpHotel as $object) {
    $hot = new Hotel($object->nom, $object->numero_telephone, $object->nom_rue, $object->code_postal, $object->ville);
    $entityManager->persist($hot);   
}
$entityManager->flush();



