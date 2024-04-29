<?php
$ac = '';
$cat = '';
$hot = 'active';
$room = '';
$service = '';
include 'header.php';
include 'bdd.php';

//////////////////
if(!empty($_POST)){

    require_once'bdd.php';  
    $req=$pdo->prepare("INSERT INTO hotel SET name=?,phoneNumber=?,streetName=?,postalCode=?,city=?");
    $req->execute([$_POST['name'],$_POST['phoneNumber'],$_POST['streetName'],$_POST['postalCode'],$_POST['city']]);
     header('location:index.php');  

}


?>
    <!-- ////////////////////// -->

    
<h1>Ajout d'un Hotel</h1>
<form action="" method="post">
    
    <div class="mb-3 w-25">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <input type="text" class="form-control" placeholder="Nom" name="name">
    </div>
    <div class="mb-3 w-25">
        <label for="exampleFormControlInput1" class="form-label">Téléphone</label>
        <input type="tel" class="form-control" placeholder="Téléphone" name="phoneNumber">
    </div>
    <div class="mb-3 w-25">
        <label for="exampleFormControlInput1" class="form-label"> Adresse</label>
        <input type="text" class="form-control" placeholder="Adresse" name="streetName">
    </div>
    <div class="mb-3 w-25">
        <label for="exampleFormControlInput1" class="form-label">Code Postal</label>
        <input type="number" class="form-control" placeholder="Code postal" name="postalCode">
    </div>
    <div class="mb-3 w-25">
        <label for="exampleFormControlInput1" class="form-label">Ville</label>
        <input type="text" class="form-control" placeholder="Ville" name="city">
    </div> 
        
    <div class="mb-3 w-25 nb-chambre">
        <label for="exampleFormControlInput1" class="form-label">Nombre de chambres</label>
        <input type="number" class="form-control" placeholder="Nombre de chambres" name="">
    </div>


  <!-- Choix services -->
  <div class="choix-multiples">
    <p><strong>Choissisez le(s) service(s) proposé(s) par l'hôtel : </strong></p>
        <label><input type="checkbox" name="24" id="1" value="film">Piscine</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Spa</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Restaurant</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Salle de sport</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Yoga</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Vélo</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Blanchisserie</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Location de films</label><br><br>
    </div>
    <!-- Choix catégories -->
 
    <div class="choix-multiples">
    <p><strong>Choissisez le(s) catégorie(s) proposé(s) par l'hôtel :</strong></p>
        <label><input type="checkbox" name="24" id="1" value="film">Standard</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Confort</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Maxi</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Luxe</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Royal Maxi</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Deluxe prestige</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Impérial</label><br>
        <label><input type="checkbox" name="24" id="1" value="film">Prestige</label><br><br>
    </div>




   description catégorie
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Merci de décrire les catégories de vos chambres</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Description catégorie"></textarea>
    </div>
     
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Ajouter</button>
    </div>
</form>

<?php include 'footer.php'; ?>