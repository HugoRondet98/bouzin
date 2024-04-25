<?php
        $ac = '';
        $cat = '';
        $hot = 'active';
        $room = '';
        $service = '';
        include 'header.php'; ?>

<h1>hotel</h1>
<?php
require_once dirname(__DIR__) . "/../bootstrap.php";
require_once dirname(__FILE__) . "/jsonToPhp/index.php";

var_dump($dataPhpHotel);

?>

<?php include 'footer.php'; ?>