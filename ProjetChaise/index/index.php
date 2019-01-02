<!DOCTYPE html>
<html lang="fr">
<header id="header2">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="index.css">

    <?php
    include '../PHP/fonction.php';
    ?>

    <div class="menu">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#">Chaise.com</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../inscription/inscriptionForm.php" ><span class="glyphicon glyphicon-user"></span>S'inscrire</a></li>
                    <li><a href="../Connexion/connexionForm.php"><span class="glyphicon glyphicon-log-in"></span>Se connecter</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="box"></div>
    <h2 class="caption">Achete une</br>Chaise</h2>
    <img src="../images/chaise.png" class="" alt="">
    <a href="../Connexion/connexionForm.php" class="btn btn-light action">Visiter les ventes</a>
</header>

