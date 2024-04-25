<?php
$ac = '';
$cat = '';
$hot = '';
$room = '';
$service = 'active';
include 'header.php'; ?>

<h1>services</h1>
<?php
require_once dirname(__DIR__) . "/../bootstrap.php";
require_once dirname(__FILE__) . "/jsonToPhp/index.php";

var_dump($dataPhpServices);

?>
<?php include 'footer.php'; ?>