<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Nouvel Hôtel </h1>
    <form action="post.php" method="post">
        <input type="text" name="name" placeholder="Nom">
        <input type="text" name="street" placeholder="Rue">
        <input type="text" name="city" placeholder="Ville">
        <input type="text" name="phone" placeholder="Téléphone">
        <input type="text" name="cp" placeholder="Code postal"><br>
        <p>Service proposé par l'hôtel :</p>
        <label><input type="checkbox" name="24" id="1" value="film">Location de film</label><br>
        <label><input type="checkbox" name="23" id="2" value="blanc">Blanchisserie</label><br>
        <label><input type="checkbox" name="22" id="3" value="velo">Location de vélo</label><br>
        <label><input type="checkbox" name="21" id="4" value="yoga">Yoga</label><br>
        <label><input type="checkbox" name="20" id="5" value="sport">Salle de sport</label><br>
        <label><input type="checkbox" name="19" id="6" value="resto">Restaurant</label><br>
        <label><input type="checkbox" name="18" id="7" value="spa">Spa</label><br>
        <label><input type="checkbox" name="17" id="8" value="piscine">Piscine</label><br><br>
        <input type="submit" value="Enregistrer">
    </form>

</body>
</html>