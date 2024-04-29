<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="css/styles.css">
  <style>
    .active {
      border-bottom: 2px solid orange
    }

    a.nav-link:hover {
      color: orange;
    }

/* Cartes page d'accueil */

.card {
    margin: 0px 30px 30px;
    background: aliceblue;
}

.cartes-hotels {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
}

.choix-multiples {
  text-align: left;
}

button, input, optgroup, select, textarea {
  margin-right: 10px;
}

  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link " href="../view/index.php">Home </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link " href="../view/categories.php">Catégories</a>
        </li> -->
        <!--
        <li class="nav-item">
          <a class="nav-link " href="../view/hotel.php">Ajout d'un hôtel</a>
        </li>
          <li class="nav-item">
          <a class="nav-link " href="../view/room.php">Chambres</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link " href="../view/services.php">Services</a>
        </li> -->

        <li class="nav-item">
          <a class="nav-link " href="../view/CompareHotels.php">Comparer 2 hôtels</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link " href="../view/ModifyRoom.php">Modifier</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link " href="../view/connexion.php">Connexion</a>
        </li>
      </ul>
    </div>
  </nav>



  <nav class="navbar navbar-expand-lg navbar-light bg-light header-insertion">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link " href="../insertion/Categories.php">insertion>Categories </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link  " href="../insertion/Hotel.php">insertion>Hotel </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link  " href="../insertion/Room.php">insertion>Room </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="../insertion/services.php">insertion>Services </a>
        </li>

        <a href="" class="test"></a>
      </ul>
    </div>
  </nav>