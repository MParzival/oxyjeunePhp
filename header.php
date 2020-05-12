<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (isset($title)): ?>
            <?= $title ?>
        <?php else : ?>
            Oxyjeune - Location de ski et de velo à Bordeaux
        <?php endif ?>

    </title>
    <meta name="robots" content="index, follow" >
    <meta name="keywords" content="oxyjeune, location vélo, Bordeaux, Gironde" >
    <meta name="author" content="MPazival" >
    <meta name="description" content="OXY'JEUNE, spécialiste de la location de vélos et de la location de skis à Bordeaux.">
    <link  rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link  rel="stylesheet" type="text/css" href="css/general.css">
    <link  rel="stylesheet" type="text/css" href="css/tarif.css">
    <link  rel="stylesheet" type="text/css" href="css/my_style.css">
    <script src="https://kit.fontawesome.com/c4ba74bed4.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.html">
        <img src="img/LOGO-OXY-VERT.png" alt="logo" class="logoTitreHeader">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pro.php">Location professionnels</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="location.php">Location particuliers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="repair.php">Entretiens/réparations</a>
            </li>
            <!--<li class="nav-item">
                <a class="nav-link" href="conseil.php">Conseil et partenaires</a>
            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="tarif.php">Tarifs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>
