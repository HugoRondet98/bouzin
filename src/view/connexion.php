<?php

use App\Classes\Hotel;

 include 'header.php'; ?>

<h1>Connexion test</h1>
<?php
//echo password_hash("bouzin", PASSWORD_BCRYPT); cryptage d'un mot de passe
//1  Besoin de faire une requête dans la BDD dans la table admin  pour récupérer le name et son mot de passe 
//avec la condition nom d'utilisteur= nom saisie
//2 A partir du résultat de la BDD, comparer le mot de passe en clair(fournit pas l'utilisateur via le formulaire)
// avec le mot de passe haché depuis la BDD. La fonction password_verify s'occupe de cette vérification
//3 en fonction du résultat, soit la fonction password retourne true( deux mdp identiques) donc on fait le traitement 
//associé pour ce scénario sinon ça veut dire les 2 mdp ne sont pas identiques et dire "mdp incorrects"

if (!empty($_POST)) {
    //var_dump($_POST);

    include 'bdd.php';
    $errors = array();

    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);
    $sql = "SELECT name, password FROM admin WHERE name=:val"; // val  est un motif

    $pdoStatement = $pdo->prepare($sql);
    if ($pdoStatement) {
        $pdoStatement->execute(['val' => $name]); // transforme le motif
        $result = $pdoStatement->fetch();
        // on veut comparer le mot de passe saisie depuis le formulaire avec
        // le mot de passe haché récupéré depuis la base de données

        //var_dump($result);
        if ($result) {
            if (password_verify($password, $result->password)) {
                echo "<div class=\"alert alert-success\" role=\"alert\">Connexion réussie</div>";

                sleep(1);
                header('location:hotel.php');
            } else {
                $errors['password']="Mot de passe invalide";
            }
        } else {
            $errors['name'] = "Identifiant invalide";
        }
    }
}



?>
<?php if (!empty($errors)) : ?>
    <div class="erreur">
        <div class="alert alert-secondary" role="alert">
            Vous n'avez pas rempli le formulaire correctement
        </div>
        
            <?php foreach ($errors as $error) : ?>
               <div><?php echo "<div class=\"alert alert-danger\" role=\"alert\">$error</div>"; ?></div>
            <?php endforeach; ?>
        
    </div>
<?php endif; ?>
<form action="" method="post">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="nom" name="name">
        <label for="floatingInput">nom</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
    </div>
    <button class="btn btn-primary" type="submit">Se connecter</button>
</form>

<?php include 'footer.php'; ?>