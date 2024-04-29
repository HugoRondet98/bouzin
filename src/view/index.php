<?php

use App\Classes\Hotel;

include 'header.php';
include 'bdd.php';
//////////////////////////////
///////////////pagination////////////////////////////////

$perPages = 6;

$currentPage=(int)$_GET['page'] ?? 1 ?:1;

$offset = $perPages * ($currentPage-1);

$query=$pdo->query('SELECT * FROM hotel LIMIT'.$perPages.'OFFSET '.$offset);

$count = (int)$pdo->query('SELECT COUNT(id) FROM hotel LIMIT 1')->fetch(PDO::FETCH_NUM)[0];

$pages= ceil($count/$perPages);

$hotels= $query->fetchAll(PDO::FETCH_CLASS, Hotel::class);

//////////////////////////////////////////////////////////////////
?>
<main>
    <h1>Bouzin's Land</h1>
    <?php

    ////////////////////////////////
    $sql =  'SELECT name,phoneNumber,streetName,postalCode,city FROM hotel LIMIT 6';
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
<nav class="pagination" aria-label="Page navigation example">

  <?php if($currentPage>1): ?>
    <a href="index.php?page=<?php $currentPage-1?>" class="btn btn-primary">précédente</a>
    <?php endif ?>

  <?php if($currentPage<$pages): ?>
    <a href="index.php?page=<?php $currentPage+1?>" class="btn btn-primary">suivante</a>
  <?php endif ?>

</nav>
<?php include 'footer.php';
