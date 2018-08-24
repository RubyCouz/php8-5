<?php

    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', 'partie8', false, false); //écriture cookie pseudo
        setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/', 'partie8', false, false); //écriture cookie mot de passe
    }

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3</title>
    </head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <body>
        <form class="form" action="index.php" method="post">
            <div class="form-group">
                <label for="login">Pseudo : </label>
                <input type="text" class="form-control" id="login" aria-describedby="pseudoHelp" placeholder="Pseudo" name="login" />
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password" />
            </div>
            <button type="submit" class="btn btn-primary" name="confirm">Valider</button>
        </form>
        <p>
            <?php
            if (!empty($_POST['login'])) { //si le champs de saisie contient des informations
                ?>
            <p>Votre pseudo : <?=
                $_POST ['login'];  // affichage des données
            } else {
                ?>
            <p>Pseudo non défini</p> <!--message d'erreur en cas d'absence d'info -->
            }
            <?php
            if (!empty($_POST['password'])) { //si le champs de saisie contient des informations
                ?>
                <p>Votre pseudo : <?=
                    $_POST ['password'];  // affichage des données
                } else {
                    
                    // $_POST permet de lire le cookie sans recharger la page, à l'invers de $_COOKIE
                }
?>
        <p>Mot de passe non défini</p> <!--message d'erreur en cas d'absence d'info-->
        }              
    </p>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" charset="utf-8"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="assets/jquery-3.3.1.min.js" charset="utf-8"></script>
</body>
</html>
