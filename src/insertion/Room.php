<?php
$ac = '';
$cat = '';
$hot = '';
$room = 'active';
$service = '';
include 'header.php'; ?>

<h1>chambres</h1>
<?php
require_once dirname(__DIR__) . "/../bootstrap.php";
require_once dirname(__FILE__) . "/jsonToPhp/index.php";

var_dump($dataPhpRoom);

?>
<?php include 'footer.php'; ?>