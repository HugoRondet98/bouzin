<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .active{border-bottom: 2px solid orange}
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
        <a class="nav-link <?php echo $ac; ?>" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $cat; ?>" href="category.php">Catégories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $hot; ?>" href="hotel.php">Hôtels</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $room; ?>" href="room.php">Chambres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $service; ?>" href="service.php">Services</a>
      </li>
    </ul>
  </div>
</nav>