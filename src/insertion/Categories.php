<?php

use App\Classes\Categories;
use Doctrine\ORM\EntityManager;

require_once dirname(__DIR__)."/../bootstrap.php";
require_once dirname(__FILE__)."/jsonToPhp/index.php";

echo 'Insertion des categories du fichier json dans la BDD';

/*foreach ($dataPhpCategories as $object) {
    $cat = new Categories($object->name, $object->description);
    $cat->setName($object->name);
    $cat->setDescriptionCategorie($object->description);
    $entityManager->persist($cat);
}
$entityManager->flush();*/

