<?php
$ac = '';
$cat = 'active';
$hot = '';
$room = '';
$service = '';
include 'header.php'; ?>

<h1>categories</h1>

<?php
require_once dirname(__DIR__) . "/../bootstrap.php";
require_once dirname(__FILE__) . "/jsonToPhp/index.php";

var_dump($dataPhpCategories);

?>

<?php include 'footer.php'; ?>