<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="AchatProduit.css" media="all" />
    <script type="text/javascript" src="AchatProduit.js"></script>
</head>


<?php
include '../NavBar/navbar.php';
returnUtilisateur($id);
$idProduit = $_GET['idProduit'];
$accueil = affichageDescriptionProduit($idProduit);
$donneeCli = affichageClient();
?>
<body>
<div class="container">
    <div class="row">
        <?php
        echo $_GET['idProduit'];
        var_dump($accueil);
        ?>
        <div class="col-xs-4 item-photo">
            <img style="max-width:100%;" src="https://ak1.ostkcdn.com/images/products/8818677/Samsung-Galaxy-S4-I337-16GB-AT-T-Unlocked-GSM-Android-Cell-Phone-85e3430e-6981-4252-a984-245862302c78_600.jpg" />
        </div>
        <div class="col-xs-5" style="border:0px solid gray">
            <h3><?=$accueil['NomProduit']->NomProduit;?></h3>
            <h5 style="color:#337ab7">En vente par <a href="#"><?=$donneeCli[$id]->NomCli;?></a></h5>

            <h6 class="title-price"><small>Prix du Produit</small></h6>
            <h3 style="margin-top:0px;"><?=$accueil[$id]->PrixVenteProduit;?> Crédit</h3>

            <div class="section">
                <h6 class="title-attr" style="margin-top:15px;" ><small>Produit en Stock</small></h6>
                <div>
                    <h3 style="margin-top:0px;"><?=$accueil[$id]->StockProduit;?></h3>
                </div>
            </div>
            <div class="section" style="padding-bottom:5px;">
                <h6 class="title-attr"><small>Fabriqué avec:</small></h6>
                <div>
                    <?=$accueil[$id]->MateriauxProduit;?>
                </div>
            </div>
            <div class="section" style="padding-bottom:5px;">
                <h6 class="title-attr"><small>Type de chaise:</small></h6>
                <div>
                    <?=$accueil[$id]->TypeProduit;?>
                </div>
            </div>
            <div class="section" style="padding-bottom:20px;">
                <h6 class="title-attr"><small>Quantité</small></h6>
                <div>
                    <input type="number" value="1" max="<?=$accueil[$id]->StockProduit;?>" />
                </div>
            </div>
            <div class="section" style="padding-bottom:5px;">
                <h6 class="title-attr"><small>Couleur de la chaise</small></h6>
                <div>
                    <?=$accueil[$id]->CouleurProduit;?>
                </div>
            </div>
        </div>

        <div class="col-xs-9">
            <ul class="menu-items">
                <li class="active">Detaille du Produit</li>
            </ul>
            <div style="width:100%;border-top:1px solid silver">
                <p style="padding:15px;">
                    <small>
                        <?=$accueil[$id]->DescriptionProduit;?>
                    </small>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
