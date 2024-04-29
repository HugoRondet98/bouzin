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

    Choix services 
    <select class="form-select" aria-label="Default select example" multiple>
        <option selected>Services</option>
        <option value="1">Piscine</option>
        <option value="2">Spa</option>
        <option value="3">Restaurant</option>
        <option value="4">Salle de sport</option>
        <option value="5">Yoga</option>
        <option value="6">Vélo</option>
        <option value="7">Blanchisserie</option>
        <option value="8">Location de films</option>
    </select>
    Choix catégories 
    <select class="form-select" aria-label="Default select example" multiple>

        <option selected>Catégories</option>
        <option value="1">Standard</option>
        <option value="2">Confort</option>
        <option value="3">Maxi</option>
        <option value="4">Luxe</option>
        <option value="5">Royal Maxi</option>
        <option value="6">Deluxe-prestige</option>
        <option value="7">Palace deluxe</option>
        <option value="8">Impérial</option>
        <option value="9">Prestige</option>
    </select>

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