<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet07 Exercice03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-11 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">Vous êtes redirigé sur la page d'infos !</h1>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
        <a class="mr-3" href="index.php">cliquez pour revenir</a>
            <?php 
                echo 'Les variables de session  prénom, nom et age sont L\' '. $_SESSION['prenom']. '  '. $_SESSION['nom']. '  '. 'âge : '. '  '. $_SESSION['age'];
            ?>
        </div>
    </div>
</body>
</html>