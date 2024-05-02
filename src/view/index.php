<?php

include 'header.php';
include 'bdd.php';
//////////////////////////////
///////////////pagination////////////////////////////////

$perPages = 2;

$currentPage = $_GET['page'] ?? 1;
$currentPage = (int) htmlspecialchars($currentPage);

$offset = $perPages * ($currentPage-1);
$offset = (int) $offset;

$sth = $pdo->query("SELECT * FROM hotel LIMIT $perPages OFFSET $offset");
if($sth) {
  /**
   * Ici il y a un souci avec le constructeur de la classe Hotel
   * à priori une erreur empeche d'instancier un objet Hotel
   * du coup j'ai retiré le deuxième argument de fetchAll
   * par defaut il renvoie un objet de type stdclass
   * 
   */
  $hotels = $sth->fetchAll(PDO::FETCH_CLASS);
}

$count = (int) $pdo->query('SELECT COUNT(id) FROM hotel LIMIT 1')->fetch(PDO::FETCH_NUM)[0];

if($count) {
  $pages = ceil($count/$perPages);
}


//////////////////////////////////////////////////////////////////
?>
<main>
    <h1>Bouzin's Land</h1>
    <div class="cartes-hotels">
        <?php foreach ($hotels as $hotel) { ?>
            <div class="card" style="width: 18rem;">
                <!--  <img src="../../icone1.jpeg" class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title"><?= $hotel->name; ?> </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>

                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="tel:<?= $hotel->phoneNumber; ?>" class="card-link">tel :<?= $hotel->phoneNumber; ?> </a>
                </div>
            </div>
        <?php }?>
     
    </div>
</main>
<nav class="pagination" aria-label="Page navigation example">

  <?php if($currentPage>1): ?>
    <a href="index.php?page=<?= $currentPage-1; ?>" class="btn btn-primary">précédente</a>
    <?php endif ?>

  <?php if($currentPage<$pages): ?>
    <a href="index.php?page=<?= $currentPage+1; ?>" class="btn btn-primary">suivante</a>
  <?php endif ?>

</nav>
<?php include 'footer.php';
