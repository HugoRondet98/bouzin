<?php
$ac = '';
$cat = '';
$hot = 'active';
$room = '';
$service = '';
include 'header.php'; ?>
 
<style>
nav.navbar.navbar-expand-lg.navbar-light.bg-light {
    font-style: italic;
}
body {
    text-align: center;
}
h1 {
    font-family: arial, sans-serif;
    font-size: xx-large;
}
form {
    display: flex;
    flex-wrap: wrap;
    align-content: center;
    justify-content: space-around;
    align-items: center;
    flex-direction: column;
}
.form-select {
    width: 35%;
}
select.form-select {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 5px 5px 20px 10px;
}
</style>
 
 
 
<form action="post.php" method="post">
    <h1>Ajout d'un Hotel</h1>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <input type="text" class="form-control" placeholder="Nom">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Téléphone</label>
        <input type="tel" class="form-control" placeholder="Téléphone">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"> Adresse</label>
        <input type="text" class="form-control" placeholder="Adresse">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Code Postal</label>
        <input type="number" class="form-control" placeholder="Code postal">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Ville</label>
        <input type="text" class="form-control" placeholder="Ville">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre de chambres</label>
        <input type="number" class="form-control" placeholder="Nombre de chambres">
    </div>
 
    <!-- Choix services -->
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
    <!-- Choix catégories -->
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
 
    <!-- description catégorie -->
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Merci de décrire les catégories de vos chambres</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Description catégorie"></textarea>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Ajouter</button>
    </div>
</form>
 
<?php include 'footer.php'; ?>