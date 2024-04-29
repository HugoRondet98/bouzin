<?php
$ac = 'active';
$cat = '';
$hot = '';
$room = '';
$service = '';
include 'header.php';
include 'bdd.php';
//////////////////////////////

?>




<main>
    <h1>Bouzin's Land</h1>
    <?php

    ////////////////////////////////
    $sql =  'SELECT name,phoneNumber,streetName,postalCode,city FROM hotel ';
    $req = $pdo->query($sql); ?>
    <div class="cartes-hotels">
        <?php while ($tableau = $req->fetch(PDO::FETCH_OBJ)) { ?>


            <div class="card" style="width: 18rem;">
                <!--  <img src="../../icone1.jpeg" class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title"><?php echo $tableau->name; ?> </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>

                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="tel:<?php echo $tableau->phoneNumber; ?>" class="card-link">tel :<?php echo $tableau->phoneNumber; ?> </a>
                </div>
            </div>


        <?php }?>

     
    </div>
</main>

<?php include 'footer.php';
