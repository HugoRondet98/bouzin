<?php include 'header.php'; ?>

<h1>Connexion test</h1>
<?php
//echo password_hash("bouzin", PASSWORD_BENCRYPT); //Cryptage d'un mot de passe 

// 1. Faire une requête dans la BDD dans la table Admin pour récupérer 
// le nom d'utilisateur et son mdp avec la condition 'Where'
// 2. A partir du résultat de la BDD, comparer le mdp en clair (fourni par l'utilisateur via le formulaire)
//  avec le mdp haché depuis la BDD. La fonction password_verify s'occupe de cette vérification.
// 3. En fonction du résultat, soit la fonction password_verify nous retourne 'True' (= les 2 mdp sont identiques)
// donc on fait le traitement associé pour ce scénario sinon cela veut dire que les 2 mdp
// ne sont pas identiques et nous indique 'False'.

if (!empty($_POST)) {
    //var_dump($_POST);

    include 'bdd.php';
    $errors=array();

    $name=htmlspecialchars($_POST['name']);
    $password=htmlspecialchars($_POST['password']);
    $sql="SELECT name, password FROM admin WHERE name=:val"; // val est un motif 

    $pdoStatement=$pdo->prepare($sql);
    if ($pdoStatement) {
        $pdoStatement->execute(['val'->$name]); // Transforme le motif   
        $result=$pdoStatement->fetch();
        // On veut comparer le mot de passe saisi depuis le formulaire 
        // avec le mot de passe haché récupéré depuis la base de données

        //var_dump($result);
        if($result){
            if(password_verify($password, $result->password)){
                //echo "Hello <br>";
                header('location:hotel.php');
        } else { 
            echo "Nous n'avons pas compris votre demande <br>";
        }
        } else {
            echo 'Utilisateur n\'existe pas';
        }
    }   
}

?>

<form action="">
<div class="form-floating mb-3">
<input type="text" class="form-control" id="floatingInput" placeholder="nom">
<label for="floatingInput">Nom</label>
</div>
<div class="form-floating">
<input type="password" class="form-control" id="floatingPassword" placeholder="Password">
<label for="floatingPassword">Password</label>
</div>
<button class="btn btn-primary" type="submit">Se connecter</button>
</form>


<?php include 'footer.php'; ?>