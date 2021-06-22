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
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet07 Exercice03</h1>
            <h2 class="col-12 text-info text-center">Créez trois variables de session (nom, prénom et âge). 
            Au clic sur un lien, affichez l'âge sur une autre page.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php
            session_start();

            $_SESSION['prenom'] = 'Ami';
            $_SESSION['nom'] = 'Kaouet';
            $_SESSION['age'] = '41';

            ?>
            <a class="mr-3" href="infos.php">Cliquez pour afficher les variables de sessions !</a>
        </div>
    </div>
</body>
</html>